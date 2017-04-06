<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/693f760')) {
            // _assetic_693f760
            if ($pathinfo === '/js/693f760.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '693f760',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_693f760',);
            }

            // _assetic_693f760_0
            if ($pathinfo === '/js/693f760_jquery-2.1.1.min_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '693f760',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_693f760_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/54defac')) {
                // _assetic_54defac
                if ($pathinfo === '/css/54defac.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '54defac',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_54defac',);
                }

                // _assetic_54defac_0
                if ($pathinfo === '/css/54defac_summernote_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '54defac',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_54defac_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/88244b9')) {
                // _assetic_88244b9
                if ($pathinfo === '/css/88244b9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '88244b9',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_88244b9',);
                }

                if (0 === strpos($pathinfo, '/css/88244b9_')) {
                    if (0 === strpos($pathinfo, '/css/88244b9_styles')) {
                        // _assetic_88244b9_0
                        if ($pathinfo === '/css/88244b9_styles-responsive_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '88244b9',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_88244b9_0',);
                        }

                        // _assetic_88244b9_1
                        if ($pathinfo === '/css/88244b9_styles_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '88244b9',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_88244b9_1',);
                        }

                    }

                    // _assetic_88244b9_2
                    if ($pathinfo === '/css/88244b9_font-awesome.min_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '88244b9',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_88244b9_2',);
                    }

                    // _assetic_88244b9_3
                    if ($pathinfo === '/css/88244b9_animate.min_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '88244b9',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_88244b9_3',);
                    }

                    // _assetic_88244b9_4
                    if ($pathinfo === '/css/88244b9_bootstrap.min_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '88244b9',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_88244b9_4',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/dc7830f')) {
            // _assetic_dc7830f
            if ($pathinfo === '/js/dc7830f.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'dc7830f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_dc7830f',);
            }

            if (0 === strpos($pathinfo, '/js/dc7830f_')) {
                if (0 === strpos($pathinfo, '/js/dc7830f_jquery-')) {
                    // _assetic_dc7830f_0
                    if ($pathinfo === '/js/dc7830f_jquery-2.1.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dc7830f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_dc7830f_0',);
                    }

                    // _assetic_dc7830f_1
                    if ($pathinfo === '/js/dc7830f_jquery-ui-1.10.2.custom.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dc7830f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_dc7830f_1',);
                    }

                }

                // _assetic_dc7830f_2
                if ($pathinfo === '/js/dc7830f_bootstrap.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dc7830f',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_dc7830f_2',);
                }

                if (0 === strpos($pathinfo, '/js/dc7830f_jquery.')) {
                    // _assetic_dc7830f_3
                    if ($pathinfo === '/js/dc7830f_jquery.icheck.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dc7830f',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_dc7830f_3',);
                    }

                    if (0 === strpos($pathinfo, '/js/dc7830f_jquery.t')) {
                        // _assetic_dc7830f_4
                        if ($pathinfo === '/js/dc7830f_jquery.transit_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dc7830f',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_dc7830f_4',);
                        }

                        // _assetic_dc7830f_5
                        if ($pathinfo === '/js/dc7830f_jquery.touchSwipe.min_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dc7830f',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_dc7830f_5',);
                        }

                    }

                }

                // _assetic_dc7830f_6
                if ($pathinfo === '/js/dc7830f_login_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dc7830f',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_dc7830f_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/c3aedc9')) {
            // _assetic_c3aedc9
            if ($pathinfo === '/css/c3aedc9.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c3aedc9',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c3aedc9',);
            }

            // _assetic_c3aedc9_0
            if ($pathinfo === '/css/c3aedc9_jquery.dataTables_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c3aedc9',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c3aedc9_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/18601e8')) {
                // _assetic_18601e8
                if ($pathinfo === '/js/18601e8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '18601e8',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_18601e8',);
                }

                if (0 === strpos($pathinfo, '/js/18601e8_')) {
                    if (0 === strpos($pathinfo, '/js/18601e8_jquery')) {
                        // _assetic_18601e8_0
                        if ($pathinfo === '/js/18601e8_jquery-2.1.1.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '18601e8',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_18601e8_0',);
                        }

                        // _assetic_18601e8_1
                        if ($pathinfo === '/js/18601e8_jquery.dataTables.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '18601e8',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_18601e8_1',);
                        }

                    }

                    // _assetic_18601e8_2
                    if ($pathinfo === '/js/18601e8_table-data_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '18601e8',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_18601e8_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/0d3dab6')) {
                // _assetic_0d3dab6
                if ($pathinfo === '/js/0d3dab6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0d3dab6',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0d3dab6',);
                }

                if (0 === strpos($pathinfo, '/js/0d3dab6_')) {
                    // _assetic_0d3dab6_0
                    if ($pathinfo === '/js/0d3dab6_jquery-2.1.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0d3dab6',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0d3dab6_0',);
                    }

                    // _assetic_0d3dab6_1
                    if ($pathinfo === '/js/0d3dab6_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0d3dab6',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0d3dab6_1',);
                    }

                    // _assetic_0d3dab6_2
                    if ($pathinfo === '/js/0d3dab6_summernote.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0d3dab6',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_0d3dab6_2',);
                    }

                    // _assetic_0d3dab6_3
                    if ($pathinfo === '/js/0d3dab6_editUser_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0d3dab6',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_0d3dab6_3',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/03b06f0')) {
            // _assetic_03b06f0
            if ($pathinfo === '/css/03b06f0.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '03b06f0',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_03b06f0',);
            }

            if (0 === strpos($pathinfo, '/css/03b06f0_')) {
                // _assetic_03b06f0_0
                if ($pathinfo === '/css/03b06f0_select2_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '03b06f0',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_03b06f0_0',);
                }

                // _assetic_03b06f0_1
                if ($pathinfo === '/css/03b06f0_bootstrap-select_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '03b06f0',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_03b06f0_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/a415305')) {
            // _assetic_a415305
            if ($pathinfo === '/js/a415305.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a415305',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a415305',);
            }

            if (0 === strpos($pathinfo, '/js/a415305_')) {
                // _assetic_a415305_0
                if ($pathinfo === '/js/a415305_jquery-2.1.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a415305',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a415305_0',);
                }

                // _assetic_a415305_1
                if ($pathinfo === '/js/a415305_bootstrap-datetimepicker_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a415305',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a415305_1',);
                }

                // _assetic_a415305_2
                if ($pathinfo === '/js/a415305_summernote.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a415305',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_a415305_2',);
                }

                // _assetic_a415305_3
                if ($pathinfo === '/js/a415305_bootstrap-select_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a415305',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_a415305_3',);
                }

                // _assetic_a415305_4
                if ($pathinfo === '/js/a415305_select2.min_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a415305',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_a415305_4',);
                }

                // _assetic_a415305_5
                if ($pathinfo === '/js/a415305_newTodo_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a415305',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_a415305_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/b0ebfe2')) {
                // _assetic_b0ebfe2
                if ($pathinfo === '/css/b0ebfe2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b0ebfe2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b0ebfe2',);
                }

                if (0 === strpos($pathinfo, '/css/b0ebfe2_')) {
                    // _assetic_b0ebfe2_0
                    if ($pathinfo === '/css/b0ebfe2_summernote_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b0ebfe2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b0ebfe2_0',);
                    }

                    // _assetic_b0ebfe2_1
                    if ($pathinfo === '/css/b0ebfe2_bootstrap-select_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b0ebfe2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_b0ebfe2_1',);
                    }

                    // _assetic_b0ebfe2_2
                    if ($pathinfo === '/css/b0ebfe2_select2_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b0ebfe2',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_b0ebfe2_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/7571dc4')) {
                // _assetic_7571dc4
                if ($pathinfo === '/css/7571dc4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7571dc4',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7571dc4',);
                }

                if (0 === strpos($pathinfo, '/css/7571dc4_s')) {
                    // _assetic_7571dc4_0
                    if ($pathinfo === '/css/7571dc4_summernote_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7571dc4',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7571dc4_0',);
                    }

                    // _assetic_7571dc4_1
                    if ($pathinfo === '/css/7571dc4_select2_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7571dc4',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7571dc4_1',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/4f12e53')) {
                // _assetic_4f12e53
                if ($pathinfo === '/js/4f12e53.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4f12e53',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4f12e53',);
                }

                if (0 === strpos($pathinfo, '/js/4f12e53_')) {
                    // _assetic_4f12e53_0
                    if ($pathinfo === '/js/4f12e53_jquery-2.1.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4f12e53',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4f12e53_0',);
                    }

                    // _assetic_4f12e53_1
                    if ($pathinfo === '/js/4f12e53_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4f12e53',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_4f12e53_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/4f12e53_s')) {
                        // _assetic_4f12e53_2
                        if ($pathinfo === '/js/4f12e53_summernote.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4f12e53',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_4f12e53_2',);
                        }

                        // _assetic_4f12e53_3
                        if ($pathinfo === '/js/4f12e53_select2.min_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '4f12e53',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_4f12e53_3',);
                        }

                    }

                    // _assetic_4f12e53_4
                    if ($pathinfo === '/js/4f12e53_editEntity_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '4f12e53',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_4f12e53_4',);
                    }

                }

            }

            // _assetic_1b37284
            if ($pathinfo === '/js/1b37284.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '1b37284',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1b37284',);
            }

        }

        if (0 === strpos($pathinfo, '/css/3a2ecb8')) {
            // _assetic_3a2ecb8
            if ($pathinfo === '/css/3a2ecb8.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3a2ecb8',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3a2ecb8',);
            }

            if (0 === strpos($pathinfo, '/css/3a2ecb8_')) {
                // _assetic_3a2ecb8_0
                if ($pathinfo === '/css/3a2ecb8_perfect-scrollbar_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3a2ecb8',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3a2ecb8_0',);
                }

                // _assetic_3a2ecb8_1
                if ($pathinfo === '/css/3a2ecb8_bootstrap-timepicker_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3a2ecb8',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_3a2ecb8_1',);
                }

                if (0 === strpos($pathinfo, '/css/3a2ecb8_fullcalendar')) {
                    // _assetic_3a2ecb8_2
                    if ($pathinfo === '/css/3a2ecb8_fullcalendar_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3a2ecb8',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_3a2ecb8_2',);
                    }

                    // _assetic_3a2ecb8_3
                    if ($pathinfo === '/css/3a2ecb8_fullcalendar.print_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3a2ecb8',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_3a2ecb8_3',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/65a09dc')) {
                // _assetic_65a09dc
                if ($pathinfo === '/js/65a09dc.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '65a09dc',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_65a09dc',);
                }

                if (0 === strpos($pathinfo, '/js/65a09dc_')) {
                    if (0 === strpos($pathinfo, '/js/65a09dc_jquery')) {
                        // _assetic_65a09dc_0
                        if ($pathinfo === '/js/65a09dc_jquery-2.1.1.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '65a09dc',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_65a09dc_0',);
                        }

                        // _assetic_65a09dc_1
                        if ($pathinfo === '/js/65a09dc_jquery.mousewheel_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '65a09dc',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_65a09dc_1',);
                        }

                    }

                    // _assetic_65a09dc_2
                    if ($pathinfo === '/js/65a09dc_bootstrap-timepicker_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '65a09dc',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_65a09dc_2',);
                    }

                    // _assetic_65a09dc_3
                    if ($pathinfo === '/js/65a09dc_moment.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '65a09dc',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_65a09dc_3',);
                    }

                    // _assetic_65a09dc_4
                    if ($pathinfo === '/js/65a09dc_jquery-ui.custom.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '65a09dc',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_65a09dc_4',);
                    }

                    if (0 === strpos($pathinfo, '/js/65a09dc_f')) {
                        // _assetic_65a09dc_5
                        if ($pathinfo === '/js/65a09dc_fullcalendar_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '65a09dc',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_65a09dc_5',);
                        }

                        // _assetic_65a09dc_6
                        if ($pathinfo === '/js/65a09dc_fr_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '65a09dc',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_65a09dc_6',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/93c8695')) {
                // _assetic_93c8695
                if ($pathinfo === '/js/93c8695.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '93c8695',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_93c8695',);
                }

                if (0 === strpos($pathinfo, '/js/93c8695_')) {
                    // _assetic_93c8695_0
                    if ($pathinfo === '/js/93c8695_jquery-2.1.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93c8695',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_93c8695_0',);
                    }

                    // _assetic_93c8695_1
                    if ($pathinfo === '/js/93c8695_bootstrap-datetimepicker_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93c8695',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_93c8695_1',);
                    }

                    // _assetic_93c8695_2
                    if ($pathinfo === '/js/93c8695_summernote.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93c8695',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_93c8695_2',);
                    }

                    // _assetic_93c8695_3
                    if ($pathinfo === '/js/93c8695_bootstrap-select_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93c8695',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_93c8695_3',);
                    }

                    // _assetic_93c8695_4
                    if ($pathinfo === '/js/93c8695_select2.min_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93c8695',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_93c8695_4',);
                    }

                    // _assetic_93c8695_5
                    if ($pathinfo === '/js/93c8695_newEvent_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '93c8695',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_93c8695_5',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/8ec4c1a')) {
            // _assetic_8ec4c1a
            if ($pathinfo === '/css/8ec4c1a.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a',);
            }

            if (0 === strpos($pathinfo, '/css/8ec4c1a_')) {
                // _assetic_8ec4c1a_0
                if ($pathinfo === '/css/8ec4c1a_font-awesome.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_0',);
                }

                // _assetic_8ec4c1a_1
                if ($pathinfo === '/css/8ec4c1a_animate.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_1',);
                }

                // _assetic_8ec4c1a_2
                if ($pathinfo === '/css/8ec4c1a_bootstrap.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_2',);
                }

                // _assetic_8ec4c1a_3
                if ($pathinfo === '/css/8ec4c1a_all_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_3',);
                }

                // _assetic_8ec4c1a_4
                if ($pathinfo === '/css/8ec4c1a_perfect-scrollbar_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_4',);
                }

                // _assetic_8ec4c1a_5
                if ($pathinfo === '/css/8ec4c1a_summernote_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_5',);
                }

                if (0 === strpos($pathinfo, '/css/8ec4c1a_bootstrap-')) {
                    // _assetic_8ec4c1a_6
                    if ($pathinfo === '/css/8ec4c1a_bootstrap-fileupload.min_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_6',);
                    }

                    if (0 === strpos($pathinfo, '/css/8ec4c1a_bootstrap-modal')) {
                        // _assetic_8ec4c1a_7
                        if ($pathinfo === '/css/8ec4c1a_bootstrap-modal-bs3patch_8.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_7',);
                        }

                        // _assetic_8ec4c1a_8
                        if ($pathinfo === '/css/8ec4c1a_bootstrap-modal_9.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_8',);
                        }

                    }

                }

                // _assetic_8ec4c1a_9
                if ($pathinfo === '/css/8ec4c1a_datetimepicker_10.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_9',);
                }

                if (0 === strpos($pathinfo, '/css/8ec4c1a_styles')) {
                    // _assetic_8ec4c1a_10
                    if ($pathinfo === '/css/8ec4c1a_styles_11.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_10',);
                    }

                    // _assetic_8ec4c1a_11
                    if ($pathinfo === '/css/8ec4c1a_styles-responsive_12.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_11',);
                    }

                }

                // _assetic_8ec4c1a_12
                if ($pathinfo === '/css/8ec4c1a_plugins_13.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_12',);
                }

                // _assetic_8ec4c1a_13
                if ($pathinfo === '/css/8ec4c1a_theme-default_14.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 13,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_13',);
                }

                if (0 === strpos($pathinfo, '/css/8ec4c1a_owl.')) {
                    // _assetic_8ec4c1a_14
                    if ($pathinfo === '/css/8ec4c1a_owl.carousel_15.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 14,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_14',);
                    }

                    if (0 === strpos($pathinfo, '/css/8ec4c1a_owl.t')) {
                        // _assetic_8ec4c1a_15
                        if ($pathinfo === '/css/8ec4c1a_owl.theme_16.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 15,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_15',);
                        }

                        // _assetic_8ec4c1a_16
                        if ($pathinfo === '/css/8ec4c1a_owl.transitions_17.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '8ec4c1a',  'pos' => 16,  '_format' => 'css',  '_route' => '_assetic_8ec4c1a_16',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/5cfc949')) {
            // _assetic_5cfc949
            if ($pathinfo === '/js/5cfc949.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5cfc949',);
            }

            if (0 === strpos($pathinfo, '/js/5cfc949_')) {
                if (0 === strpos($pathinfo, '/js/5cfc949_jquery-')) {
                    // _assetic_5cfc949_0
                    if ($pathinfo === '/js/5cfc949_jquery-2.1.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5cfc949_0',);
                    }

                    // _assetic_5cfc949_1
                    if ($pathinfo === '/js/5cfc949_jquery-ui-1.10.2.custom.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5cfc949_1',);
                    }

                }

                // _assetic_5cfc949_2
                if ($pathinfo === '/js/5cfc949_bootstrap.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5cfc949_2',);
                }

                // _assetic_5cfc949_3
                if ($pathinfo === '/js/5cfc949_jquery.mousewheel_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_5cfc949_3',);
                }

                // _assetic_5cfc949_4
                if ($pathinfo === '/js/5cfc949_perfect-scrollbar_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_5cfc949_4',);
                }

                if (0 === strpos($pathinfo, '/js/5cfc949_jquery')) {
                    // _assetic_5cfc949_5
                    if ($pathinfo === '/js/5cfc949_jquery.scrollTo.min_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_5cfc949_5',);
                    }

                    // _assetic_5cfc949_6
                    if ($pathinfo === '/js/5cfc949_jquery-scrolltofixed-min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_5cfc949_6',);
                    }

                    if (0 === strpos($pathinfo, '/js/5cfc949_jquery.')) {
                        // _assetic_5cfc949_7
                        if ($pathinfo === '/js/5cfc949_jquery.appear_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_5cfc949_7',);
                        }

                        // _assetic_5cfc949_8
                        if ($pathinfo === '/js/5cfc949_jquery.cookie_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_5cfc949_8',);
                        }

                        // _assetic_5cfc949_9
                        if ($pathinfo === '/js/5cfc949_jquery.velocity.min_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_5cfc949_9',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/5cfc949_bootstrap-modal')) {
                    // _assetic_5cfc949_10
                    if ($pathinfo === '/js/5cfc949_bootstrap-modal_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_5cfc949_10',);
                    }

                    // _assetic_5cfc949_11
                    if ($pathinfo === '/js/5cfc949_bootstrap-modalmanager_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_5cfc949_11',);
                    }

                }

                // _assetic_5cfc949_12
                if ($pathinfo === '/js/5cfc949_jquery.pulsate.min_13.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_5cfc949_12',);
                }

                // _assetic_5cfc949_13
                if ($pathinfo === '/js/5cfc949_moment.min_14.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_5cfc949_13',);
                }

                // _assetic_5cfc949_14
                if ($pathinfo === '/js/5cfc949_bootstrap-datetimepicker_15.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_5cfc949_14',);
                }

                if (0 === strpos($pathinfo, '/js/5cfc949_s')) {
                    // _assetic_5cfc949_15
                    if ($pathinfo === '/js/5cfc949_summernote.min_16.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_5cfc949_15',);
                    }

                    // _assetic_5cfc949_16
                    if ($pathinfo === '/js/5cfc949_select2.min_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_5cfc949_16',);
                    }

                }

                // _assetic_5cfc949_17
                if ($pathinfo === '/js/5cfc949_main_18.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_5cfc949_17',);
                }

                // _assetic_5cfc949_18
                if ($pathinfo === '/js/5cfc949_user-profile_19.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_5cfc949_18',);
                }

                // _assetic_5cfc949_19
                if ($pathinfo === '/js/5cfc949_bootstrap-timepicker_20.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_5cfc949_19',);
                }

                // _assetic_5cfc949_20
                if ($pathinfo === '/js/5cfc949_fullcalendar_21.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_5cfc949_20',);
                }

                // _assetic_5cfc949_21
                if ($pathinfo === '/js/5cfc949_jquery.dataTables.min_22.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_5cfc949_21',);
                }

                // _assetic_5cfc949_22
                if ($pathinfo === '/js/5cfc949_owl.carousel_23.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5cfc949',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_5cfc949_22',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/h')) {
            // message_homepage
            if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_homepage')), array (  '_controller' => 'ICGM2\\MessageBundle\\Controller\\DefaultController::indexAction',));
            }

            // home
            if ($pathinfo === '/home') {
                return array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
            }

        }

        // map
        if ($pathinfo === '/map') {
            return array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\MapController::indexAction',  '_route' => 'map',);
        }

        // history/reload
        if ($pathinfo === '/history/reload') {
            return array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\DefaultController::reloadHistoryAction',  '_route' => 'history/reload',);
        }

        if (0 === strpos($pathinfo, '/todo')) {
            if (0 === strpos($pathinfo, '/todo/show')) {
                // todos
                if ($pathinfo === '/todo/show') {
                    return array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\TodoController::showAllAction',  '_route' => 'todos',);
                }

                // todo
                if (preg_match('#^/todo/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\TodoController::showAction',));
                }

            }

            // todo/new
            if (0 === strpos($pathinfo, '/todo/new') && preg_match('#^/todo/new(?:/(?P<entity_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo/new')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\TodoController::newAction',  'entity_id' => NULL,));
            }

            // todo/delete
            if (0 === strpos($pathinfo, '/todo/delete') && preg_match('#^/todo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo/delete')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\TodoController::deleteAction',));
            }

            // todo/edit
            if (0 === strpos($pathinfo, '/todo/edit') && preg_match('#^/todo/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'todo/edit')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\TodoController::editAction',));
            }

        }

        // message/new
        if (0 === strpos($pathinfo, '/message/new') && preg_match('#^/message/new/(?P<receiver>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'message/new')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\MessageController::newAction',));
        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/entit')) {
                if (0 === strpos($pathinfo, '/entity')) {
                    // entity
                    if (preg_match('#^/entity/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\EntityController::showAction',));
                    }

                    // entity/edit
                    if (0 === strpos($pathinfo, '/entity/edit') && preg_match('#^/entity/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'entity/edit')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\EntityController::editAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/entities')) {
                    // entities
                    if ($pathinfo === '/entities/show') {
                        return array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\EntityController::showAllAction',  '_route' => 'entities',);
                    }

                    // entities/new
                    if ($pathinfo === '/entities/new') {
                        return array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\EntityController::newAction',  '_route' => 'entities/new',);
                    }

                    // entities/delete
                    if (0 === strpos($pathinfo, '/entities/delete') && preg_match('#^/entities/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'entities/delete')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\EntityController::deleteAction',));
                    }

                }

            }

            // events
            if ($pathinfo === '/events/show') {
                return array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\EventController::showAllAction',  '_route' => 'events',);
            }

        }

        // calendar
        if (0 === strpos($pathinfo, '/calendar/show') && preg_match('#^/calendar/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendar')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\CalendarController::showAction',));
        }

        if (0 === strpos($pathinfo, '/event')) {
            // event
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\EventController::showAction',));
            }

            // event/new
            if (0 === strpos($pathinfo, '/events/new') && preg_match('#^/events/new(?:/(?P<entity_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event/new')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\EventController::newAction',  'entity_id' => NULL,));
            }

            // event/delete
            if (0 === strpos($pathinfo, '/event/delete') && preg_match('#^/event/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event/delete')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\EventController::deleteAction',));
            }

            // event/edit
            if (0 === strpos($pathinfo, '/event/edit') && preg_match('#^/event/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event/edit')), array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\EventController::editAction',));
            }

        }

        // histories
        if ($pathinfo === '/histories/show') {
            return array (  '_controller' => 'ICGM2\\PagesBundle\\Controller\\HistoryController::showAction',  '_route' => 'histories',);
        }

        if (0 === strpos($pathinfo, '/contributor')) {
            // contributors
            if ($pathinfo === '/contributors/show') {
                return array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\ContributorsController::showcontributorsAction',  '_route' => 'contributors',);
            }

            // contributor/delete
            if (0 === strpos($pathinfo, '/contributor/delete') && preg_match('#^/contributor/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contributor/delete')), array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\ContributorsController::deletecontributorsAction',));
            }

            // contributor
            if (0 === strpos($pathinfo, '/contributor/show') && preg_match('#^/contributor/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contributor')), array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\ContributorsController::showcontributorAction',));
            }

            // contributor/edit
            if (0 === strpos($pathinfo, '/contributor/edit') && preg_match('#^/contributor/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contributor/edit')), array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\ContributorsController::editcontributorsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if (0 === strpos($pathinfo, '/profile/edit') && preg_match('#^/profile/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_profile_edit')), array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\ProfileController::editAction',));
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'ICGM2\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/communication')) {
            // fos_message_inbox
            if (rtrim($pathinfo, '/') === '/communication') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_message_inbox');
                }

                return array (  '_controller' => 'ICGM2\\MessageBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
            }

            // fos_message_sent
            if ($pathinfo === '/communication/sent') {
                return array (  '_controller' => 'ICGM2\\MessageBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
            }

            // fos_message_deleted
            if ($pathinfo === '/communication/deleted') {
                return array (  '_controller' => 'ICGM2\\MessageBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
            }

            // fos_message_search
            if ($pathinfo === '/communication/search') {
                return array (  '_controller' => 'ICGM2\\MessageBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
            }

            // fos_message_thread_new
            if ($pathinfo === '/communication/new') {
                return array (  '_controller' => 'ICGM2\\MessageBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
            }

            // fos_message_thread_delete
            if (preg_match('#^/communication/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fos_message_thread_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_delete')), array (  '_controller' => 'ICGM2\\MessageBundle\\Controller\\MessageController::deleteAction',));
            }
            not_fos_message_thread_delete:

            // fos_message_thread_undelete
            if (preg_match('#^/communication/(?P<threadId>[^/]++)/undelete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_message_thread_undelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_undelete')), array (  '_controller' => 'ICGM2\\MessageBundle\\Controller\\MessageController::undeleteAction',));
            }
            not_fos_message_thread_undelete:

            // fos_message_thread_view
            if (preg_match('#^/communication/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_view')), array (  '_controller' => 'ICGM2\\MessageBundle\\Controller\\MessageController::threadAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
