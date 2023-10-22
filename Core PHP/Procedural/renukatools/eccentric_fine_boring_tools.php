<?php

    include('include/header.php');
    $MenuName = basename($_SERVER['PHP_SELF']);
    $ProductCategory = $_REQUEST['product_category'];

?>

    <body>
        <!-- main wrapper start -->
        <main>
            
            <!-- page main wrapper start -->
            <div class="icon-bar" >
                <button class="Show active" ><i class="fa fa-bars"></i></button>
            </div>
            <ul id="download-catalouge">
              <li>
                <a href="download_center.php"><i class="fa fa-download" ></i><br>C<br>A<br>T<br>A<br>L<br>O<br>G<br>U<br>E</a>
              </li>
            </ul>

            <!-- breadcrumb area start -->
            <div class="breadcrumb-area breadcrumb-area-style_2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <h1>Eccentric Fine Boring Tools</h1>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php" style="color: #2a80b9;" >Home</a></li>
                                            <?php  if ($ProductCategory == 'products') {  ?>

                                                <li class="breadcrumb-item"><a href="product_page.php" style="color: #2a80b9;" >Products</a></li>
                                                <li class="breadcrumb-item"><a href="finish_boring_bars_product_page.php" style="color: #2a80b9;" >Finish Boring Bars</a></li>
                                                
                                            <?php }else if($ProductCategory == 'std_products') { ?>

                                                <li class="breadcrumb-item"><a href="standard_product_page.php" style="color: #2a80b9;" >Standard Products</a></li>

                                            <?php }else {  echo "php error"; } ?>
                                        <li class="breadcrumb-item active" aria-current="page"><a style="cursor: default;">Eccentric Fine Boring Tools</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb area end -->

            <div class="pt-25 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- sidebar area start -->
                        <div class="col-lg-3 order-1 order-lg-1">

                            <?php  if ($ProductCategory == 'products') {  ?>

                                <div class="sidebar-single">
                                    <h5 class="entry-title">Products</h5>
                                    <ul class="list-group" style="margin: 10px 0px 5px 0px;">
                                        <li class="list-group-item"><a class="first_sub_menu active">Finish Boring Bars</a><i class="first fa fa-angle-down" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup" style="display: block;">
                                                <li><a href="fine_boring_bars_with_micro_bore_units.php?product_category=products">Fine Boring Bars with Micro Bore Units</a></li>
                                                <li class="active_menu"><a href="eccentric_fine_boring_tools.php?product_category=products" style="color: white !important;">Eccentric Fine Boring Tools</a></li>
                                                <li><a class="second_sub_menu">BCA Boring Bars</a><i class="second fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                                    <ul class="secondLevel">
                                                        <li><a href="bca_boring_bars.php?product_category=products">Intoduction To BCA Boring Bars</a></li>
                                                        <li><a href="bca_boring_bars_integral_type.php?product_category=products">BCA Boring Bars - Integral Type</a></li>
                                                        <li><a href="bca_boring_bars_modular_type.php?product_category=products">BCA Boring Bars - Modular Type</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="boring_kit.php?product_category=products">Boring Kit</a></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item"><a class="first_sub_menu">Semi - Finish Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="semi_finish_boring_bars_iso_cartridge_type.php?product_category=products">Semi-Finish Boring Bars - ISO Cartridge Type</a></li>
                                                <li><a href="semi_finish_boring_bars_special_cartridge_type.php?product_category=products">Semi-Finish Boring Bars - Special Cartridge Type</a></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item"><a class="first_sub_menu">Rough Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="rough_boring_bars_fixed_pocket_type.php?product_category=products">Fixed Pocket type Rough Boring Bars (Core Drills)</a></li>
                                                <li><a class="second_sub_menu">Duo Boring Bars </a><i class="second fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                                    <ul class="secondLevel">
                                                        <li><a href="rough_boring_bars_duo_boring_bars.php?product_category=products">Intoduction To Duo Boring Bars</a></li>
                                                        <li><a href="rough_boring_bars_duo_boring_bars_integral_type.php?product_category=products">Duo Boring Bars - Integral Type</a></li>
                                                        <li><a href="rough_boring_bars_duo_boring_bars_modular_type.php?product_category=products">Duo Boring Bars - Modular Type</a></li>
                                                        <li><a href="rough_boring_bars_duo_boring_bars_flange_type.php?product_category=products">Duo Boring Bars - Flange Type</a></li>
                                                        <li><a href="rough_boring_bars_duo_boring_bars_side_lock_type.php?product_category=products">Duo Boring Bars - Side Lock Type</a></li>
                                                        <li><a href="rough_boring_bars_duo_boring_bars_arbor_type.php?product_category=products">Duo Boring Bars - Arbor Type</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item"><a href="antivibration_boring_bars.php?product_category=products">Antivibration Boring Bars</a></li>
                                        <li class="list-group-item"><a href="back_boring_bars.php?product_category=products">Back Boring Bars / Back Spot Facing Tools</a></li>
                                        <li class="list-group-item"><a href="combination_boring_bars.php?product_category=products">Combination Boring Bars</a></li>
                                        <li class="list-group-item"><a class="first_sub_menu">Milling Cutters</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="milling_cutters_face_milling_cutters.php?product_category=products">Face Milling Cutters</a></li>
                                                <li><a href="milling_cutters_modular_milling_cutters.php?product_category=products">Modular Milling Cutters</a></li>
                                                <li><a href="milling_cutters_shoulder_milling_cutters.php?product_category=products">Shoulder Milling Cutters</a></li>
                                                <li><a href="milling_cutters_full_Half_side_and_face_milling_cutters.php?product_category=products">Full / Half - Side & Face Milling Cutters</a></li>
                                                <li><a href="milling_cutters_t_slot_milling_cutters.php?product_category=products">T - Slot Milling Cutters</a></li>
                                                <li><a href="milling_cutters_45_approach_angle_milling_cutters.php?product_category=products">45° Approach Angle Milling Cutters</a></li>
                                                <li><a href="milling_cutters_end_milling_cutters.php?product_category=products">End Mill Cutters</a></li>
                                                <li><a href="milling_cutters_thread_milling_cutters.php?product_category=products">Thread Mill Cutters</a></li>
                                                <li><a href="dovetail_taper_angle_milling_cutters.php?product_category=products">Dovetail / Taper / Angle Milling Cutters</a></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item"><a href="spot_face_cutters.php?product_category=products">Spot Face Cutters</a></li>
                                        <li class="list-group-item"><a href="centre_spot_face_cutters.php?product_category=products">Centre Spot Face Cutters</a></li>
                                        <li class="list-group-item"><a class="first_sub_menu">Drilling Tools</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="drilling_tools_u_drills.php?product_category=products">U - Drills</a></li>
                                                <li><a href="drilling_tools_trepanning_drills.php?product_category=products">Trepanning Tools</a></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item"><a class="first_sub_menu">Chamfer Tools</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="chamfer_tools_fixed_pocket_type_chamfer_tools.php?product_category=products">Fixed Pocket Type Chamfer Tools</a></li>
                                                <li><a href="chamfer_tools_adjustable_diameter_chamfer_tools_duo_chamfering_tools.php?product_category=products">Adjustable diameter Chamfer Tools - Duo Chamfering Tools</a></li>
                                                <li><a href="chamfer_tools_cartridge_type_chamfer_tools.php?product_category=products">Cartridge type Chamfer Tools</a></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item"><a class="first_sub_menu">Cartridges</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="cartridges_micro_bore_units_mbu.php?product_category=products">Micro Bore Units With MBU</a></li>
                                                <li><a href="cartridges_finish_boring_cartridges.php?product_category=products">Finish Boring Cartridges</a></li>
                                                <li><a href="cartridges_special_cartridges.php?product_category=products">Special Cartridges</a></li>
                                                <li><a href="cartridges_iso_cartridges.php?product_category=products">ISO Cartridges</a></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item"><a class="first_sub_menu">Turning Tools</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="turning_tools.php?product_category=products">Introduction To Turning Tools</a></li>
                                                <li><a href="turning_tools_id_boring_tools.php?product_category=products">ID Boring Tools</a></li>
                                                <li><a href="turning_tools_od_turning_tools.php?product_category=products">OD Turning Tools</a></li>
                                                <li><a href="turning_tools_face_grooving_tools.php?product_category=products">Face Grooving Tools</a></li>
                                                <li><a href="turning_tools_id_grooving_tools.php?product_category=products">ID Grooving Tools</a></li>
                                                <li><a href="turning_tools_grooving_and_parting_tools.php?product_category=products">Grooving & Parting Tools</a></li>
                                                <li><a href="turning_tools_threading_tools.php?product_category=products">Threading Tools</a></li>
                                                <li><a href="turning_tools_combination_turning_tools.php?product_category=products">Combination Turning Tools</a></li>
                                                <li><a href="turning_tools_anti_vibration_turning_tool.php?product_category=products">Anti-vibration Turning Tools</a></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item"><a href="special_adaptors.php?product_category=products">Special Adaptors</a></li>
                                    </ul>
                                </div>

                              
                            <?php }else if($ProductCategory == 'std_products') { ?>

                                <div class="sidebar-single">
                                    <h5 class="entry-title">Standard Products</h5>
                                    <ul class="list-group" style="margin: 10px 0px 5px 0px;">
                                        <li class="list-group-item"><a href="cartridges_micro_bore_units_mbu.php?product_category=std_products">Micro Bore Units - MBU</a></li>
                                        <li class="list-group-item"><a href="fine_boring_bars_with_micro_bore_units.php?product_category=std_products">Fine Boring Bars With MBU</a></li>
                                        <li class="list-group-item active_menu"><a href="eccentric_fine_boring_tools.php?product_category=std_products" style="color: white !important;" >Eccentric Fine Boring Tools</a></li>
<!--                                         <li class="list-group-item"><a href="cartridges_finish_boring_cartridges.php?product_category=std_products">Finish Boring Cartridges</a></li> -->
                                        <li class="list-group-item"><a class="first_sub_menu">BCA Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="bca_boring_bars.php?product_category=std_products">Intoduction To BCA Boring Bars</a></li>
                                                <li><a href="bca_boring_bars_integral_type.php?product_category=std_products">BCA Boring Bars - Integral Type</a></li>
                                                <li><a href="bca_boring_bars_modular_type.php?product_category=std_products">BCA Boring Bars - Modular Type</a></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item" ><a href="boring_kit.php?product_category=std_products" >Boring Kit</a></li>
                                        <li class="list-group-item"><a class="first_sub_menu">Duo Boring Bars</a><i class="first fa fa-angle-up" style="float: right;margin-top: 5px;"></i>
                                            <ul class="slideup">
                                                <li><a href="rough_boring_bars_duo_boring_bars.php?product_category=std_products">Intoduction To Duo Boring Bars</a></li>
                                                <li><a href="rough_boring_bars_duo_boring_bars_integral_type.php?product_category=std_products">Duo Boring Bars - Integral Type</a></li>
                                                <li><a href="rough_boring_bars_duo_boring_bars_modular_type.php?product_category=std_products">Duo Boring Bars - Modular Type</a></li>
                                                <li><a href="rough_boring_bars_duo_boring_bars_flange_type.php?product_category=std_products">Duo Boring Bars - Flange Type</a></li>
                                                <li><a href="rough_boring_bars_duo_boring_bars_side_lock_type.php?product_category=std_products">Duo Boring Bars - Side Lock Type</a></li>
                                                <li><a href="rough_boring_bars_duo_boring_bars_arbor_type.php?product_category=std_products">Duo Boring Bars - Arbor Type</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                               
                            <?php }else {  echo "php error"; } ?>


                        </div>
                        <!-- sidebar area end -->
                        <!-- shop main wrapper start -->
                        <div class="col-lg-9 order-2 order-lg-2">
                            <div style="padding: 25px 15px;">
                                <h5 class="entry-title">Eccentric Fine Boring Tools</h5>
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li> <a class="active" data-toggle="tab" href="#eccentric_fine_boring_tools_tab_one">Introduction</a> </li>
                                        <li> <a data-toggle="tab" href="#eccentric_fine_boring_tools_tab_two_range_±01mm">For TC.. Inserts Range ±0.1mm</a> </li>
                                        <li> <a data-toggle="tab" href="#eccentric_fine_boring_tools_tab_two_range_±03mm">For TC.. Inserts Range ±0.3mm</a> </li>
                                        <li> <a data-toggle="tab" href="#eccentric_fine_boring_tools_tab_three_range_±01mm">For CC.. Inserts Range ±0.1mm</a> </li>
                                        <li> <a data-toggle="tab" href="#eccentric_fine_boring_tools_tab_three_range_±03mm">For CC.. Inserts Range ±0.3mm</a> </li>
                                        <li> <a data-toggle="tab" href="#eccentric_fine_boring_tools_tab_four">Back Boring & Facing Tool</a> </li>
                                        <li> <a data-toggle="tab" href="#eccentric_fine_boring_tools_tab_fifth">OD Turning Tool</a> </li>
                                        <li> <a data-toggle="tab" href="#eccentric_fine_boring_tools_tab_sixth">Operating Instructions</a> </li>
                                        <li> <a data-toggle="tab" href="#eccentric_fine_boring_tools_tab_seventh">Precautionary Measures</a> </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="eccentric_fine_boring_tools_tab_one">
                                            <div class="tab-one">
                                                <div>
                                                    <h6 class="tab_heading">Eccentric Fine Boring Tool</h6>
                                                    <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                        <div class="col-md-1"> </div>
                                                        <div class="col-md-10"> 
                                                            <a href="javascript:void(0)" class="pop_up_image" >
                                                                <img src="include/img/Eccentric Fine Boring Tools/Introduction/Small 1.jpg" alt="include/img/Eccentric Fine Boring Tools/Introduction/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;" > 
                                                            </a>
                                                        </div>
                                                        <div class="col-md-1"> </div>
                                                    </div>
                                                    <h6 class="tab_heading">Facts & Advantages</h6>
                                                    <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                        <div class="col-md-12">
                                                            <ul>
                                                                <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Used for finish boring application from diameter 5mm up to 25mm (any intermediary size on demand).</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Available with adjustment options of ±0.1mm (LC 10 microns) & ±0.3mm (LC 30 microns).</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; User friendly & quick adjustment ensures minimum loss time.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Guaranteed repeatability by using recommended torque for locking.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Most economic solution for finish boring with precise adjustment in microns.</li>
                                                                <li><i class="fa fa-dot-circle-o"></i> &nbsp; Tailor made tools with similar concept also available for the application of Back Boring and OD Turning </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <h6 class="tab_heading">Nomenclature Code Key for Ordering Eccentric Fine Boring Tool</h6>
                                                    <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                        <div class="col-md-1"> </div>
                                                        <div class="col-md-10"> 
                                                            <a href="javascript:void(0)" class="pop_up_image" >
                                                                <img src="include/img/Eccentric Fine Boring Tools/Nomenclature/Small 1.jpg" alt="include/img/Eccentric Fine Boring Tools/Nomenclature/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;" > 
                                                            </a>
                                                        </div>
                                                        <div class="col-md-1"> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eccentric_fine_boring_tools_tab_two_range_±01mm">
                                            <h6 class="tab_heading">Eccentric Fine Boring Tool For TC.. Inserts Range ±0.1mm</h6>

                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.1/Small 1.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.1/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"  > 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.1/Small 2.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.1/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"  > 
                                                        </a>                                         
                                                    </div>
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.1/Small 3.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.1/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"  > 
                                                        </a>
                                                    </div>
                                                </div>

                                            
                                            <h6 class="tab_heading">Specifications Table :  With Adjustment Option ±0.1mm (LC-10 Microns).</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;" >All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Fig No.</th>
                                                        <th>Sr. No.</th>
                                                        <th>Item Code</th>
                                                        <th>Insert</th>
                                                        <th>D</th>
                                                        <th>L</th>
                                                        <th>L2</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="12">
                                                                <p>Fig 1</p>
                                                            </td>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 8.0 - 8.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>8.0 - 8.9</p>
                                                            </td>
                                                            <td>
                                                                <p>24</p>
                                                            </td>
                                                            <td>
                                                                <p>67</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 9.0 - 9.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>9.0 - 9.9</p>
                                                            </td>
                                                            <td>
                                                                <p>27</p>
                                                            </td>
                                                            <td>
                                                                <p>70</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 10 - 10.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>10 - 10.9</p>
                                                            </td>
                                                            <td>
                                                                <p>30</p>
                                                            </td>
                                                            <td>
                                                                <p>73</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 11 - 11.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>11 - 11.9</p>
                                                            </td>
                                                            <td>
                                                                <p>33</p>
                                                            </td>
                                                            <td>
                                                                <p>76</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 12 - 12.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>12 - 12.9</p>
                                                            </td>
                                                            <td>
                                                                <p>36</p>
                                                            </td>
                                                            <td>
                                                                <p>79</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 13 - 13.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>13 - 13.9</p>
                                                            </td>
                                                            <td>
                                                                <p>39</p>
                                                            </td>
                                                            <td>
                                                                <p>82</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 14 - 14.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>14 - 14.9</p>
                                                            </td>
                                                            <td>
                                                                <p>42</p>
                                                            </td>
                                                            <td>
                                                                <p>85</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 15 - 15.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>15 - 15.9</p>
                                                            </td>
                                                            <td>
                                                                <p>45</p>
                                                            </td>
                                                            <td>
                                                                <p>88</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 16 - 16.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>16 - 16.9</p>
                                                            </td>
                                                            <td>
                                                                <p>48</p>
                                                            </td>
                                                            <td>
                                                                <p>91</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 17 - 17.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>17 - 17.9</p>
                                                            </td>
                                                            <td>
                                                                <p>51</p>
                                                            </td>
                                                            <td>
                                                                <p>94</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 18 - 18.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>18 - 18.9</p>
                                                            </td>
                                                            <td>
                                                                <p>54</p>
                                                            </td>
                                                            <td>
                                                                <p>97</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 19 - 19.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>19 - 19.9</p>
                                                            </td>
                                                            <td>
                                                                <p>57</p>
                                                            </td>
                                                            <td>
                                                                <p>100</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="5">
                                                                <p>Fig 2</p>
                                                            </td>
                                                            <td>
                                                                <p>13</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 20 - 20.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>20 - 20.9</p>
                                                            </td>
                                                            <td>
                                                                <p>60</p>
                                                            </td>
                                                            <td>
                                                                <p>103</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>14</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 21 - 21.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>21 - 21.9</p>
                                                            </td>
                                                            <td>
                                                                <p>63</p>
                                                            </td>
                                                            <td>
                                                                <p>106</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>15</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 22 - 22.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>22 - 22.9</p>
                                                            </td>
                                                            <td>
                                                                <p>66</p>
                                                            </td>
                                                            <td>
                                                                <p>109</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 23 - 23.9 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>23 - 23.9</p>
                                                            </td>
                                                            <td>
                                                                <p>69</p>
                                                            </td>
                                                            <td>
                                                                <p>112</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>17</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 24 - 25.0 T01</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>24 - 25.0</p>
                                                            </td>
                                                            <td>
                                                                <p>70</p>
                                                            </td>
                                                            <td>
                                                                <p>113</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Least count for ±0.1mm adjustable EFBT is 10 microns, for ±0.3mm adjustable EFBT is 30 microns.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Shank Diameter "Ød" for all of the above tools is 25mm, Collar Diameter is 32mm & Shank Length is 56mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Locking Screw provided is M8 with recommended torque of 8N.m. for consistent results. Allen key also provided.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Above table gives the entire range of diameters, exact diameter to be mentioned in requirement eg. 15.7mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Further options available till diameter 30mm on demand, will be tailor made with a lead time of 2-3 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Tailor made tools with similar concept also available for the application of back boring & OD boring.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Inserts are not included with the tools.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the table below these notes for the spare details.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range 'D' calculated considering 0.4mm insert nose radius.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Insert</th>
                                                        <th>Insert Screw</th>
                                                        <th>Torx</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>T-6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 0902</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.2</p>
                                                            </td>
                                                            <td>
                                                                <p>T-6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 1102</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T-7</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eccentric_fine_boring_tools_tab_two_range_±03mm">
                                            <h6 class="tab_heading">Eccentric Fine Boring Tool For TC.. Inserts Range ±0.3mm</h6>


                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.3/Small 1.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.3/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.3/Small 2.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.3/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.3/Small 3.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With TC..  Inserts - 0.3/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> 
                                                        </a>
                                                    </div>
                                                </div>


                                            <h6 class="tab_heading">Specifications Table :  With Adjustment Option ±0.3mm (LC-30 Microns).</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;" >All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Fig No.</th>
                                                        <th>Sr. No.</th>
                                                        <th>Item Code</th>
                                                        <th>Insert</th>
                                                        <th>D</th>
                                                        <th>L</th>
                                                        <th>L2</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="12">
                                                                <p>Fig 1</p>
                                                            </td>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 8.0 - 8.9 T03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>8.0 - 8.9</p>
                                                            </td>
                                                            <td>
                                                                <p>24</p>
                                                            </td>
                                                            <td>
                                                                <p>67</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 9.0 - 9.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>9.0 - 9.9</p>
                                                            </td>
                                                            <td>
                                                                <p>27</p>
                                                            </td>
                                                            <td>
                                                                <p>70</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 10 - 10.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>10 - 10.9</p>
                                                            </td>
                                                            <td>
                                                                <p>30</p>
                                                            </td>
                                                            <td>
                                                                <p>73</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 11 - 11.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>11 - 11.9</p>
                                                            </td>
                                                            <td>
                                                                <p>33</p>
                                                            </td>
                                                            <td>
                                                                <p>76</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 12 - 12.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>12 - 12.9</p>
                                                            </td>
                                                            <td>
                                                                <p>36</p>
                                                            </td>
                                                            <td>
                                                                <p>79</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 13 - 13.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>13 - 13.9</p>
                                                            </td>
                                                            <td>
                                                                <p>39</p>
                                                            </td>
                                                            <td>
                                                                <p>82</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 14 - 14.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>14 - 14.9</p>
                                                            </td>
                                                            <td>
                                                                <p>42</p>
                                                            </td>
                                                            <td>
                                                                <p>85</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 15 - 15.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>15 - 15.9</p>
                                                            </td>
                                                            <td>
                                                                <p>45</p>
                                                            </td>
                                                            <td>
                                                                <p>88</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 16 - 16.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>16 - 16.9</p>
                                                            </td>
                                                            <td>
                                                                <p>48</p>
                                                            </td>
                                                            <td>
                                                                <p>91</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 17 - 17.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>17 - 17.9</p>
                                                            </td>
                                                            <td>
                                                                <p>51</p>
                                                            </td>
                                                            <td>
                                                                <p>94</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 18 - 18.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>18 - 18.9</p>
                                                            </td>
                                                            <td>
                                                                <p>54</p>
                                                            </td>
                                                            <td>
                                                                <p>97</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 19 - 19.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>19 - 19.9</p>
                                                            </td>
                                                            <td>
                                                                <p>57</p>
                                                            </td>
                                                            <td>
                                                                <p>100</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="5">
                                                                <p>Fig 2</p>
                                                            </td>
                                                            <td>
                                                                <p>13</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 20 - 20.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>20 - 20.9</p>
                                                            </td>
                                                            <td>
                                                                <p>60</p>
                                                            </td>
                                                            <td>
                                                                <p>103</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>14</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 21 - 21.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>21 - 21.9</p>
                                                            </td>
                                                            <td>
                                                                <p>63</p>
                                                            </td>
                                                            <td>
                                                                <p>106</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>15</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 22 - 22.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>22 - 22.9</p>
                                                            </td>
                                                            <td>
                                                                <p>66</p>
                                                            </td>
                                                            <td>
                                                                <p>109</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 23 - 23.9 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>23 - 23.9</p>
                                                            </td>
                                                            <td>
                                                                <p>69</p>
                                                            </td>
                                                            <td>
                                                                <p>112</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>17</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 24 - 25.0 TC03</p>
                                                            </td>
                                                            <td>
                                                                <p>TC..0902</p>
                                                            </td>
                                                            <td>
                                                                <p>24 - 25.0</p>
                                                            </td>
                                                            <td>
                                                                <p>70</p>
                                                            </td>
                                                            <td>
                                                                <p>113</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Least count for ±0.1mm adjustable EFBT is 10 microns, for ±0.3mm adjustable EFBT is 30 microns.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Shank Diameter "Ød" for all of the above tools is 25mm, Collar Diameter is 32mm & Shank Length is 56mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Locking Screw provided is M8 with recommended torque of 8N.m. for consistent results. Allen key also provided.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Above table gives the entire range of diameters, exact diameter to be mentioned in requirement eg. 15.7mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Further options available till diameter 30mm on demand, will be tailor made with a lead time of 2-3 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Tailor made tools with similar concept also available for the application of back boring & OD boring.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Inserts are not included with the tools.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the table below these notes for the spare details.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range 'D' calculated considering 0.4mm insert nose radius.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Insert</th>
                                                        <th>Insert Screw</th>
                                                        <th>Torx</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 06T1</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>T-6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 0902</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.2</p>
                                                            </td>
                                                            <td>
                                                                <p>T-6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>TC.. 1102</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T-7</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eccentric_fine_boring_tools_tab_three_range_±01mm">
                                            <h6 class="tab_heading">Eccentric Fine Boring Tool For CC.. Inserts Range ±0.1mm</h6>

                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.1/Small 1.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.1/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.1/Small 2.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.1/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.1/Small 3.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.1/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> 
                                                        </a>
                                                    </div>
                                                </div>

                                            
                                            <h6 class="tab_heading">Specification Table :  With Adjustment Option ±0.1mm (LC-10 Microns).</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;" >All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Fig No.</th>
                                                        <th>Sr. No.</th>
                                                        <th>Item Code</th>
                                                        <th>Insert</th>
                                                        <th>D</th>
                                                        <th>L</th>
                                                        <th>L2</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="15">
                                                                <p>Fig 1</p>
                                                            </td>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 5.0 - 5.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0301</p>
                                                            </td>
                                                            <td>
                                                                <p>5.0 - 5.9</p>
                                                            </td>
                                                            <td>
                                                                <p>15</p>
                                                            </td>
                                                            <td>
                                                                <p>58</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 6.0 - 6.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0401</p>
                                                            </td>
                                                            <td>
                                                                <p>6.0 -6.9</p>
                                                            </td>
                                                            <td>
                                                                <p>18</p>
                                                            </td>
                                                            <td>
                                                                <p>61</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 7.0 - 7.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0401</p>
                                                            </td>
                                                            <td>
                                                                <p>7.0 - 7.9</p>
                                                            </td>
                                                            <td>
                                                                <p>21</p>
                                                            </td>
                                                            <td>
                                                                <p>64</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 8.0 - 8.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0401</p>
                                                            </td>
                                                            <td>
                                                                <p>8.0 - 8.9</p>
                                                            </td>
                                                            <td>
                                                                <p>24</p>
                                                            </td>
                                                            <td>
                                                                <p>67</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 9.0 - 9.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>9.0 - 9.9</p>
                                                            </td>
                                                            <td>
                                                                <p>27</p>
                                                            </td>
                                                            <td>
                                                                <p>70</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 10 - 10.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>10 - 10.9</p>
                                                            </td>
                                                            <td>
                                                                <p>30</p>
                                                            </td>
                                                            <td>
                                                                <p>73</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 11 - 11.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>11 - 11.9</p>
                                                            </td>
                                                            <td>
                                                                <p>33</p>
                                                            </td>
                                                            <td>
                                                                <p>76</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 12 - 12.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>12 - 12.9</p>
                                                            </td>
                                                            <td>
                                                                <p>36</p>
                                                            </td>
                                                            <td>
                                                                <p>79</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 13 - 13.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>13 - 13.9</p>
                                                            </td>
                                                            <td>
                                                                <p>39</p>
                                                            </td>
                                                            <td>
                                                                <p>82</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 14 - 14.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>14 - 14.9</p>
                                                            </td>
                                                            <td>
                                                                <p>42</p>
                                                            </td>
                                                            <td>
                                                                <p>85</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 15 - 15.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>15 - 15.9</p>
                                                            </td>
                                                            <td>
                                                                <p>45</p>
                                                            </td>
                                                            <td>
                                                                <p>88</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 16 - 16.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>16 - 16.9</p>
                                                            </td>
                                                            <td>
                                                                <p>48</p>
                                                            </td>
                                                            <td>
                                                                <p>91</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>13</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 17 - 17.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>17 - 17.9</p>
                                                            </td>
                                                            <td>
                                                                <p>51</p>
                                                            </td>
                                                            <td>
                                                                <p>94</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>14</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 18 - 18.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>18 - 18.9</p>
                                                            </td>
                                                            <td>
                                                                <p>54</p>
                                                            </td>
                                                            <td>
                                                                <p>97</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>15</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 19 - 19.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>19 - 19.9</p>
                                                            </td>
                                                            <td>
                                                                <p>57</p>
                                                            </td>
                                                            <td>
                                                                <p>100</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="5">
                                                                <p>Fig 2</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 20 - 20.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>20 - 20.9</p>
                                                            </td>
                                                            <td>
                                                                <p>60</p>
                                                            </td>
                                                            <td>
                                                                <p>103</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>17</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 21 - 21.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>21 - 21.9</p>
                                                            </td>
                                                            <td>
                                                                <p>63</p>
                                                            </td>
                                                            <td>
                                                                <p>106</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>18</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 22 - 22.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>22 - 22.9</p>
                                                            </td>
                                                            <td>
                                                                <p>66</p>
                                                            </td>
                                                            <td>
                                                                <p>109</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>19</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 23 - 23.9 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>23 - 23.9</p>
                                                            </td>
                                                            <td>
                                                                <p>69</p>
                                                            </td>
                                                            <td>
                                                                <p>112</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 24 - 25.0 C01</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>24 - 25.0</p>
                                                            </td>
                                                            <td>
                                                                <p>70</p>
                                                            </td>
                                                            <td>
                                                                <p>113</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Least count for ±0.1mm adjustable EFBT is 10 microns, for ±0.3mm adjustable EFBT is 30 microns.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Shank Diameter "Ød" for all of the above tools is 25mm, Collar Diameter is 32mm & Shank Length is 56mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Locking Screw provided is M8 with recommended torque of 8N.m. for consistent results. Allen key also provided.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Above table gives the entire range of diameters, exact diameter to be mentioned in requirement eg. 15.7mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Further options available till diameter 30mm on demand, will be tailor made with a lead time of 2-3 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Tailor made tools with similar concept also available for the application of back boring & OD boring.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Inserts are not included with the tools.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the table below these notes for the spare details.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range 'D' calculated considering 0.4mm insert nose radius ( and 0.2mm for insert CC.. 0301 ).</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Insert</th>
                                                        <th>Insert Screw</th>
                                                        <th>Torx</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0301</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>T-6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0401</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.2</p>
                                                            </td>
                                                            <td>
                                                                <p>T-6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0602</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T-7</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eccentric_fine_boring_tools_tab_three_range_±03mm">
                                            <h6 class="tab_heading">Eccentric Fine Boring Tool For CC.. Inserts Range ±0.3mm</h6>

                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.3/Small 1.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.3/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"  > 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.3/Small 2.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.3/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"   > 
                                                        </a>
                                                    </div>    
                                                    <div class="col-md-4"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.3/Small 3.jpg" alt="include/img/Eccentric Fine Boring Tools/Eccentric Fine Boring Tool With CC..  Inserts - 0.3/Big 3.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"  > 
                                                        </a>
                                                    </div>
                                                </div>

                                            
                                            <h6 class="tab_heading">Specifications Table :  With Adjustment Option ±0.3mm (LC-30 Microns).</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12"> <b style="float: right !important ;font-size: 10px !important;" >All dimensions are in mm.</b></div>
                                            </div>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Fig No.</th>
                                                        <th>Sr. No.</th>
                                                        <th>Item Code</th>
                                                        <th>Insert</th>
                                                        <th>D</th>
                                                        <th>L</th>
                                                        <th>L2</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td rowspan="15">
                                                                <p>Fig 1</p>
                                                            </td>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 5.0 - 5.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0301</p>
                                                            </td>
                                                            <td>
                                                                <p>5.0 - 5.9</p>
                                                            </td>
                                                            <td>
                                                                <p>15</p>
                                                            </td>
                                                            <td>
                                                                <p>58</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 6.0 - 6.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0401</p>
                                                            </td>
                                                            <td>
                                                                <p>6.0 -6.9</p>
                                                            </td>
                                                            <td>
                                                                <p>18</p>
                                                            </td>
                                                            <td>
                                                                <p>61</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 7.0 - 7.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0401</p>
                                                            </td>
                                                            <td>
                                                                <p>7.0 - 7.9</p>
                                                            </td>
                                                            <td>
                                                                <p>21</p>
                                                            </td>
                                                            <td>
                                                                <p>64</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>4</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 8.0 - 8.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0401</p>
                                                            </td>
                                                            <td>
                                                                <p>8.0 - 8.9</p>
                                                            </td>
                                                            <td>
                                                                <p>24</p>
                                                            </td>
                                                            <td>
                                                                <p>67</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>5</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 9.0 - 9.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>9.0 - 9.9</p>
                                                            </td>
                                                            <td>
                                                                <p>27</p>
                                                            </td>
                                                            <td>
                                                                <p>70</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>6</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 10 - 10.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>10 - 10.9</p>
                                                            </td>
                                                            <td>
                                                                <p>30</p>
                                                            </td>
                                                            <td>
                                                                <p>73</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>7</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 11 - 11.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>11 - 11.9</p>
                                                            </td>
                                                            <td>
                                                                <p>33</p>
                                                            </td>
                                                            <td>
                                                                <p>76</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>8</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 12 - 12.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>12 - 12.9</p>
                                                            </td>
                                                            <td>
                                                                <p>36</p>
                                                            </td>
                                                            <td>
                                                                <p>79</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>9</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 13 - 13.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>13 - 13.9</p>
                                                            </td>
                                                            <td>
                                                                <p>39</p>
                                                            </td>
                                                            <td>
                                                                <p>82</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>10</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 14 - 14.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>14 - 14.9</p>
                                                            </td>
                                                            <td>
                                                                <p>42</p>
                                                            </td>
                                                            <td>
                                                                <p>85</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>11</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 15 - 15.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>15 - 15.9</p>
                                                            </td>
                                                            <td>
                                                                <p>45</p>
                                                            </td>
                                                            <td>
                                                                <p>88</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>12</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 16 - 16.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>16 - 16.9</p>
                                                            </td>
                                                            <td>
                                                                <p>48</p>
                                                            </td>
                                                            <td>
                                                                <p>91</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>13</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 17 - 17.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>17 - 17.9</p>
                                                            </td>
                                                            <td>
                                                                <p>51</p>
                                                            </td>
                                                            <td>
                                                                <p>94</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>14</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 18 - 18.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>18 - 18.9</p>
                                                            </td>
                                                            <td>
                                                                <p>54</p>
                                                            </td>
                                                            <td>
                                                                <p>97</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>15</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 19 - 19.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>19 - 19.9</p>
                                                            </td>
                                                            <td>
                                                                <p>57</p>
                                                            </td>
                                                            <td>
                                                                <p>100</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td rowspan="5">
                                                                <p>Fig 2</p>
                                                            </td>
                                                            <td>
                                                                <p>16</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 20 - 20.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>20 - 20.9</p>
                                                            </td>
                                                            <td>
                                                                <p>60</p>
                                                            </td>
                                                            <td>
                                                                <p>103</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>17</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 21 - 21.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>21 - 21.9</p>
                                                            </td>
                                                            <td>
                                                                <p>63</p>
                                                            </td>
                                                            <td>
                                                                <p>106</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>18</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 22 - 22.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>22 - 22.9</p>
                                                            </td>
                                                            <td>
                                                                <p>66</p>
                                                            </td>
                                                            <td>
                                                                <p>109</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>19</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 23 - 23.9 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>23 - 23.9</p>
                                                            </td>
                                                            <td>
                                                                <p>69</p>
                                                            </td>
                                                            <td>
                                                                <p>112</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>20</p>
                                                            </td>
                                                            <td>
                                                                <p>RT EFBT 24 - 25.0 C03</p>
                                                            </td>
                                                            <td>
                                                                <p>CC..0602</p>
                                                            </td>
                                                            <td>
                                                                <p>24 - 25.0</p>
                                                            </td>
                                                            <td>
                                                                <p>70</p>
                                                            </td>
                                                            <td>
                                                                <p>113</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Least count for ±0.1mm adjustable EFBT is 10 microns, for ±0.3mm adjustable EFBT is 30 microns.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Shank Diameter "Ød" for all of the above tools is 25mm, Collar Diameter is 32mm & Shank Length is 56mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Locking Screw provided is M8 with recommended torque of 8N.m. for consistent results. Allen key also provided.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Above table gives the entire range of diameters, exact diameter to be mentioned in requirement eg. 15.7mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Further options available till diameter 30mm on demand, will be tailor made with a lead time of 2-3 weeks.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum recommended material removal is 0.5mm diametrically.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 1-2 weeks for all options.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Tailor made tools with similar concept also available for the application of back boring & OD boring.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Inserts are not included with the tools.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please refer the table below these notes for the spare details.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Diameter range 'D' calculated considering 0.4mm insert nose radius.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h6 class="tab_heading">Spare Details</h6>
                                            <div class="responsive_table">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <th>Sr. No.</th>
                                                        <th>Insert</th>
                                                        <th>Insert Screw</th>
                                                        <th>Torx</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0301</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.0</p>
                                                            </td>
                                                            <td>
                                                                <p>T-6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>2</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0401</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.2</p>
                                                            </td>
                                                            <td>
                                                                <p>T-6</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>3</p>
                                                            </td>
                                                            <td>
                                                                <p>CC.. 0602</p>
                                                            </td>
                                                            <td>
                                                                <p>M2.5</p>
                                                            </td>
                                                            <td>
                                                                <p>T-7</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eccentric_fine_boring_tools_tab_four">
                                            <h6 class="tab_heading">Back Boring & Facing Tool</h6>

                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-5"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Back Boring & Facing Tool/Small 1.jpg" alt="include/img/Eccentric Fine Boring Tools/Back Boring & Facing Tool/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-5"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/Back Boring & Facing Tool/Small 2.jpg" alt="include/img/Eccentric Fine Boring Tools/Back Boring & Facing Tool/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>

                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Minimum Diameter ØD = Ø10.0mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum Diameter ØD = Ø25.0mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum L/D Ratio = 2.5</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum Length L = 50mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Shank Diameter Ød = 25mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; All tools with eccentric concept for the application of back boring will be tailor made as per requirements.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Shank Diameter "Ød" for all the eccentric tools is 25mm, Collar Diameter is 32mm & Shank Length is 56mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 2-3 weeks.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eccentric_fine_boring_tools_tab_fifth">
                                            <h6 class="tab_heading">OD Turning Tool</h6>

                                                <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                    <div class="col-md-1"> </div>
                                                    <div class="col-md-5"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/OD Turning Tool/Small 1.jpg" alt="include/img/Eccentric Fine Boring Tools/OD Turning Tool/Big 1.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-5"> 
                                                        <a href="javascript:void(0)" class="pop_up_image" >
                                                            <img src="include/img/Eccentric Fine Boring Tools/OD Turning Tool/Small 2.jpg" alt="include/img/Eccentric Fine Boring Tools/OD Turning Tool/Big 2.jpg" style="cursor: zoom-in;" oncontextmenu="return false;"> 
                                                        </a>
                                                    </div>
                                                    <div class="col-md-1"> </div>
                                                </div>

                                            <h6 class="tab_heading">Notes</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Minimum Diameter ØD = Ø8.0mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum Diameter ØD = Ø22.0mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum L/D Ratio = 2.5</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Maximum Length L = 50mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Shank Diameter Ød = 25mm</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; All tools with eccentric concept for the application of OD turning will be tailor made as per requirements.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Shank Diameter "Ød" for all the eccentric tools is 25mm, Collar Diameter is 32mm & Shank Length is 56mm.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Lead time of 2-3 weeks.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eccentric_fine_boring_tools_tab_sixth">
                                            <h6 class="tab_heading">Operating Instructions</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; The tool is initially set on zero mark on the scale. (pic 1)</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4"> 
                                                    <a href="javascript:void(0)" class="pop_up_image" >
                                                        <img src="include/img/Eccentric Fine Boring Tools/Operating Instructions/Small 1.jpg" alt="include/img/Eccentric Fine Boring Tools/Operating Instructions/Big 1.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> 
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; After clamping the tool in the hydro grip or side-lock adaptor or ER collet chuck adaptor, measure the exact diameter on the pre-setter or by using a precise dial indicator</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4"> 
                                                    <a href="javascript:void(0)" class="pop_up_image" >
                                                        <img src="include/img/Eccentric Fine Boring Tools/Operating Instructions/Small 2.jpg" alt="include/img/Eccentric Fine Boring Tools/Operating Instructions/Big 2.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> 
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-8">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; In case you wish to adjust the diameter, loosen the Locking Screw of M8 with the provided Allen key of 4mm. (pic 2)</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4"> 
                                                    <a href="javascript:void(0)" class="pop_up_image" >
                                                        <img src="include/img/Eccentric Fine Boring Tools/Operating Instructions/Small 3.jpg" alt="include/img/Eccentric Fine Boring Tools/Operating Instructions/Big 3.jpg" style="cursor: zoom-in;width: 100%;" oncontextmenu="return false;"> 
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Use the same allen key to adjust the diameter by using the scale mentioned on the body of the tool. (pic 3)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; The smallest division is the least count of the tool, adjust accordingly and then recheck if the required size is achived. (pic 1)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp;If the required diameter is achieved, tighten the locking screw with a torque wrench using a torque of 8 Nm (Recommended) for precise repeatability and to ensure sufficient torque for locking (pic 2)</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row" style="padding: 5px 5px 5px 10px;">
                                                <div class="col-md-12">
                                                    <ul style="text-align: justify;">
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; The tool is now ready to use.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="eccentric_fine_boring_tools_tab_seventh">
                                            <h6 class="tab_heading">Precautionary Measures</h6>
                                            <div class="row" style="padding: 5px 5px 5px 10px;margin-top: 10px;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li> <i class="fa fa-dot-circle-o"></i> &nbsp; Due to constraints in the assembly tolerances, it is recommended that tools, if damaged, are to be returned to Renuka Tools for assessment/repair in a controlled environment. Commercials for repair can only be determined after detailed assessment of the damaged tool.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Please change the locking screws and insert screws ahead in time to avoid accidents.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; Kindly change the mounting screws and insert screws ahead in time to avoid accidents.</li>
                                                        <li><i class="fa fa-dot-circle-o"></i> &nbsp; In case of any observed decrease in accuracy over the time of usage, kindly request Renuka Tools for servicing the tool.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- shop main wrapper end -->
                    </div>
                </div>
            </div>
            <!-- page main wrapper end -->
        </main>
        <!-- main wrapper end -->
        <?php 
          include ('include/footer.php');
    ?>
    </body>
    <!-- Mirrored from demo.hasthemes.com/gengar-preview/gengar/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 05:14:13 GMT -->

    </html>