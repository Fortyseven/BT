<?php
    namespace BT;

    use Exception;
    use Mustache_Engine;
    use Mustache_Loader_FilesystemLoader;

    require_once( "app/config.php" );

    abstract class RouteType
    {
        const DIRECT  = 0;
        const PROJECT = 1;
    }

    class App
    {
        private $mustache_engine;
        private $routes;
        private $route_default;

        /*-----------------------------------------------*/
        public function __construct( $routes )
        {
            if ( !isset( $routes ) ) {
                throw new Exception( "Need routes to be defined when constructing App" );
            }
            else if ( !is_array( $routes ) ) {
                throw new Exception( "Routes should supplied as an array" );
            }

            $this->route_default = null;
            $this->routes        = $routes;
            $this->validateRoutes();

            if ( $this->route_default == null ) {
                throw new Exception( "There was no default route defined." );
            }

            $this->mustache_engine = new Mustache_Engine( array( "loader"          => new Mustache_Loader_FilesystemLoader( TEMPLATE_PATH ),
                                                                  "partials_loader" => new Mustache_Loader_FilesystemLoader( TEMPLATE_PATH ) ) );
        }

        /*-----------------------------------------------*/
        public function validateRoutes()
        {
            if ( !isset( $this->routes ) || !is_array( $this->routes ) ) {
                throw new Exception( "Routes not defined or not an array" );
            }

            foreach ( $this->routes as $route_name => $values ) {
                if ( !isset( $values[ 'name' ] ) ) {
                    throw new Exception( "Route $route_name did not define 'name'" );
                }
                if ( !isset( $values[ 'type' ] ) ) {
                    throw new Exception( "Route $route_name did not define 'type'" );
                }

                // Cache the default route, if it exists
                if ( empty( $route_name ) ) {
                    $this->route_default = $values;
                }

                if ( $values[ 'type' ] == RouteType::DIRECT ) {
                    if ( !file_exists( TEMPLATE_PATH . $values[ 'name' ] . ".mustache" ) ) {
                        throw new Exception( "Could not validate route $route_name with template named '{$values['name']}'" );
                    }
                }
            }
        }

        /*-----------------------------------------------*/
        public function run()
        {
            $request = strtolower( trim( $_SERVER[ 'QUERY_STRING' ] ) );

            if ( array_key_exists( $request, $this->routes ) ) {
                $this->renderRoute( $this->routes[ $request ] );
            }
            else {
                // Fall back to default route
                //$this->renderRoute( $this->route_default );
                header('Location: index.php');
                flush();
                exit();
            }
        }

        /*-----------------------------------------------*/
        private function renderRoute( $values )
        {
            switch ( $values[ 'type' ] ) {
                case RouteType::DIRECT:
                    echo $this->mustache_engine->render( $values[ 'name' ] );
                    break;

                case RouteType::PROJECT:
                    if ( !isset( $values[ 'properties' ] ) || !is_array( $values[ 'properties' ] ) ) {
                        throw new Exception( "This route type requires a property array" );
                    }
                    if ( !isset( $values[ 'properties' ][ 'project_name' ] ) ) {
                        throw new Exception( "project_name not supplied as property" );
                    }
                    $this->renderProject( $values[ 'properties' ][ 'project_name' ] );
                    break;

                default:
                    throw new Exception( "Unknown route type: " . $values[ 'type' ] );
                    break;
            }
        }

        /*-----------------------------------------------*/
        private function renderProject( $project_id )
        {
            // TODO: Validate path
            require( "app/data/projects/project.{$project_id}.php" );
            if ( !isset( $project ) ) {
                throw new Exception( '$project variable not defined in loaded project data' );
            }

            $project_view = $this->mustache_engine->render( "project_view", $project );

            echo $this->mustache_engine->render( "main", array( "contents" => $project_view ) );
        }
    }