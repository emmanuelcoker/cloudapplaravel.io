<?php $__env->startSection('css'); ?>
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo e(Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')); ?>">
<link href="<?php echo e(Path::asset('admin/plugins/jquery-ui/jquery-ui.min.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(Path::asset('admin/assets/css/apps/contacts.css')); ?>" rel="stylesheet" type="text/css" />

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo e(Path::asset('admin/assets/css/scrollspyNav.css')); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo e(Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.css')); ?>" rel="stylesheet" type="text/css" />

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="<?php echo e(Path::asset('admin/assets/css/components/tabs-accordian/custom-tabs.css')); ?>" rel="stylesheet" type="text/css" />


<style>
    .fillColor:hover {
        fill: white
    }

    .fillColor::selection {
        fill: white
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="layout-px-spacing">
    <div class="row layout-spacing layout-top-spacing" id="cancel-row">
        <div class="col-lg-12">
            <div class="widget-content searchable-container list">

                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                    <div class="fq-header-wrapper">
                <h1 class="" style="color:var(--tableTitleColor1)"> Today's Rate <i class="fas fa-heart-rate    "></i></h1>
                <p class="" style="color:var(--tableTitleColor2)">Manage your full exchange rates!</p>
            </div>
                    </div>

                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">


                        <?php if(Session::has('success')): ?>
                        <script>
                            swal("Updated", "<?php echo Session::get('success'); ?>", "success");
                        </script>
                        <?php endif; ?>
                        <?php if(Session::has('fail')): ?>
                        <script>
                            swal("Ooosps", "<?php echo Session::get('fail'); ?>", "error");
                        </script>
                        <?php endif; ?>
                        <?php if(Session::has('errors')): ?>
                        <script>
                            swal("Ooosps", "File type is not allowed", "error");
                        </script>
                        <?php endif; ?>




                    </div>
                </div>



                <div class="widget-content widget-content-area rounded-pills-icon">

                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 active text-center fillColor" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24" stroke-width="2">
                                    <path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 2c5.519 0 10 4.481 10 10s-4.481 10-10 10-10-4.481-10-10 4.481-10 10-10zm2 12v-3l5 4-5 4v-3h-9v-2h9zm-4-6v-3l-5 4 5 4v-3h9v-2h-9z"></path>
                                </svg> <?php echo e($tabs->tab1); ?></a>
                        </li>
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">

                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24" stroke-width="2">
                                    <path d="M18.5 21.5c2.081 0 4.239-.484 5.5-1.402v.652c0 1.243-2.56 2.25-5.5 2.25-2.939 0-5.5-1.007-5.5-2.25v-.652c1.26.918 3.42 1.402 5.5 1.402zm0-5c2.081 0 4.239-.484 5.5-1.402v.652c0 1.242-2.56 2.25-5.5 2.25-2.939 0-5.5-1.007-5.5-2.25v-.652c1.26.918 3.42 1.402 5.5 1.402zm0 2.5c2.081 0 4.239-.484 5.5-1.401v.651c0 1.243-2.56 2.25-5.5 2.25-2.939 0-5.5-1.007-5.5-2.25v-.651c1.26.917 3.42 1.401 5.5 1.401zm0-5c2.081 0 4.239-.484 5.5-1.401v.651c0 1.243-2.56 2.25-5.5 2.25-2.939 0-5.5-1.007-5.5-2.25v-.651c1.26.917 3.42 1.401 5.5 1.401zm0-13c-2.939 0-5.5 1.007-5.5 2.25s2.561 2.25 5.5 2.25c2.94 0 5.5-1.007 5.5-2.25s-2.56-2.25-5.5-2.25zm.174 3.28v.22h-.354v-.208c-.36-.003-.743-.056-1.058-.152l.162-.343c.269.063.606.126.911.126l.229-.014c.405-.053.486-.301.037-.419-.328-.09-1.335-.166-1.335-.675 0-.284.367-.537 1.054-.593v-.222h.354v.211c.258.005.544.03.863.09l-.128.342c-.243-.051-.514-.099-.779-.099l-.079.001c-.531.02-.573.287-.207.399.602.169 1.394.292 1.394.74-.001.358-.477.549-1.064.596zm-.174 7.22c2.081 0 4.239-.484 5.5-1.402v.652c0 1.243-2.56 2.25-5.5 2.25-2.939 0-5.5-1.007-5.5-2.25v-.652c1.26.918 3.42 1.402 5.5 1.402zm0-5c2.081 0 4.239-.484 5.5-1.402v.652c0 1.243-2.56 2.25-5.5 2.25-2.939 0-5.5-1.007-5.5-2.25v-.652c1.26.918 3.42 1.402 5.5 1.402zm0 2.5c2.081 0 4.239-.484 5.5-1.401v.651c0 1.243-2.56 2.25-5.5 2.25-2.939 0-5.5-1.007-5.5-2.25v-.651c1.26.917 3.42 1.401 5.5 1.401zm-13 2c-2.939 0-5.5 1.007-5.5 2.25s2.561 2.25 5.5 2.25c2.94 0 5.5-1.007 5.5-2.25s-2.56-2.25-5.5-2.25zm.174 3.28v.22h-.353v-.208c-.361-.003-.744-.056-1.058-.152l.162-.343c.269.063.607.126.911.126l.229-.014c.405-.053.487-.301.038-.419-.329-.09-1.335-.166-1.335-.675 0-.284.368-.537 1.054-.593v-.222h.353v.211c.258.005.544.03.863.09l-.128.342c-.243-.051-.513-.099-.779-.099l-.08.001c-.53.02-.572.287-.206.399.602.169 1.393.292 1.393.74-.001.358-.477.549-1.064.596zm-.174 7.22c2.081 0 4.239-.484 5.5-1.402v.652c0 1.243-2.56 2.25-5.5 2.25-2.939 0-5.5-1.007-5.5-2.25v-.652c1.26.918 3.42 1.402 5.5 1.402zm0-5c2.081 0 4.239-.484 5.5-1.402v.652c0 1.243-2.56 2.25-5.5 2.25-2.939 0-5.5-1.007-5.5-2.25v-.652c1.26.918 3.42 1.402 5.5 1.402zm0 2.5c2.081 0 4.239-.484 5.5-1.401v.651c0 1.243-2.56 2.25-5.5 2.25-2.939 0-5.5-1.007-5.5-2.25v-.651c1.26.917 3.42 1.401 5.5 1.401z" />
                                </svg><?php echo e($tabs->tab2); ?></a>
                        </li>
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-rate" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">

                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24" stroke-width="2">
                                    <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4 14.083c0-2.145-2.232-2.742-3.943-3.546-1.039-.54-.908-1.829.581-1.916.826-.05 1.675.195 2.443.465l.362-1.647c-.907-.276-1.719-.402-2.443-.421v-1.018h-1v1.067c-1.945.267-2.984 1.487-2.984 2.85 0 2.438 2.847 2.81 3.778 3.243 1.27.568 1.035 1.75-.114 2.011-.997.226-2.269-.168-3.225-.54l-.455 1.644c.894.462 1.965.708 3 .727v.998h1v-1.053c1.657-.232 3.002-1.146 3-2.864z" />
                                </svg><?php echo e($tabs->tab3); ?></a>
                        </li>
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-title" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24" stroke-width="2">
                                    <path d="M17 10.645v-2.29c-1.17-.417-1.907-.533-2.28-1.431-.373-.9.07-1.512.6-2.625l-1.618-1.619c-1.105.525-1.723.974-2.626.6-.9-.373-1.017-1.116-1.431-2.28h-2.29c-.412 1.158-.53 1.907-1.431 2.28h-.001c-.9.374-1.51-.07-2.625-.6l-1.617 1.619c.527 1.11.973 1.724.6 2.625-.375.901-1.123 1.019-2.281 1.431v2.289c1.155.412 1.907.531 2.28 1.431.376.908-.081 1.534-.6 2.625l1.618 1.619c1.107-.525 1.724-.974 2.625-.6h.001c.9.373 1.018 1.118 1.431 2.28h2.289c.412-1.158.53-1.905 1.437-2.282h.001c.894-.372 1.501.071 2.619.602l1.618-1.619c-.525-1.107-.974-1.723-.601-2.625.374-.899 1.126-1.019 2.282-1.43zm-8.5 1.689c-1.564 0-2.833-1.269-2.833-2.834s1.269-2.834 2.833-2.834 2.833 1.269 2.833 2.834-1.269 2.834-2.833 2.834zm15.5 4.205v-1.077c-.55-.196-.897-.251-1.073-.673-.176-.424.033-.711.282-1.236l-.762-.762c-.52.248-.811.458-1.235.283-.424-.175-.479-.525-.674-1.073h-1.076c-.194.545-.25.897-.674 1.073-.424.176-.711-.033-1.235-.283l-.762.762c.248.523.458.812.282 1.236-.176.424-.528.479-1.073.673v1.077c.544.193.897.25 1.073.673.177.427-.038.722-.282 1.236l.762.762c.521-.248.812-.458 1.235-.283.424.175.479.526.674 1.073h1.076c.194-.545.25-.897.676-1.074h.001c.421-.175.706.034 1.232.284l.762-.762c-.247-.521-.458-.812-.282-1.235s.529-.481 1.073-.674zm-4 .794c-.736 0-1.333-.597-1.333-1.333s.597-1.333 1.333-1.333 1.333.597 1.333 1.333-.597 1.333-1.333 1.333zm-4 3.071v-.808c-.412-.147-.673-.188-.805-.505s.024-.533.212-.927l-.572-.571c-.389.186-.607.344-.926.212s-.359-.394-.506-.805h-.807c-.146.409-.188.673-.506.805-.317.132-.533-.024-.926-.212l-.572.571c.187.393.344.609.212.927-.132.318-.396.359-.805.505v.808c.408.145.673.188.805.505.133.32-.028.542-.212.927l.572.571c.39-.186.608-.344.926-.212.318.132.359.395.506.805h.807c.146-.409.188-.673.507-.805h.001c.315-.131.529.025.924.213l.572-.571c-.186-.391-.344-.609-.212-.927s.397-.361.805-.506zm-3 .596c-.552 0-1-.447-1-1s.448-1 1-1 1 .447 1 1-.448 1-1 1z" />
                                </svg>Edit Title
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content" id="rounded-pills-icon-tabContent">
                        <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">


                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('fx-rate')->html();
} elseif ($_instance->childHasBeenRendered('ZTnJzpv')) {
    $componentId = $_instance->getRenderedChildComponentId('ZTnJzpv');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZTnJzpv');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZTnJzpv');
} else {
    $response = \Livewire\Livewire::mount('fx-rate');
    $html = $response->html();
    $_instance->logRenderedChild('ZTnJzpv', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                        </div>
                        <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="media">
                                <div class="media-body">

                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('p-t-a')->html();
} elseif ($_instance->childHasBeenRendered('1X8n9KI')) {
    $componentId = $_instance->getRenderedChildComponentId('1X8n9KI');
    $componentTag = $_instance->getRenderedChildComponentTagName('1X8n9KI');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1X8n9KI');
} else {
    $response = \Livewire\Livewire::mount('p-t-a');
    $html = $response->html();
    $_instance->logRenderedChild('1X8n9KI', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="rounded-rate" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="media">
                                <div class="media-body">
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('interest1')->html();
} elseif ($_instance->childHasBeenRendered('OMFPyGq')) {
    $componentId = $_instance->getRenderedChildComponentId('OMFPyGq');
    $componentTag = $_instance->getRenderedChildComponentTagName('OMFPyGq');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OMFPyGq');
} else {
    $response = \Livewire\Livewire::mount('interest1');
    $html = $response->html();
    $_instance->logRenderedChild('OMFPyGq', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                                </div>
                            </div>
                        </div>




                        <div class="tab-pane fade" id="rounded-title" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="media">
                                <div class="media-body">
                                    <form method="post" action="<?php echo e(route('rate_tab_store')); ?>"> <?php echo csrf_field(); ?>
                                        <div class="searchable-items list">



                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing" style="margin-top: 40px;">
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="col-md-11 mx-auto">

                                                            <div class="work-section">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6" style="left: 0pc; right: 0px; margin:auto">
                                                                                <div class="form-group">
                                                                                    <label for="degree3"><b>Tab 1</b></label>
                                                                                    <input type="text" name="tab1" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)" value="<?php echo e($tabs->tab1); ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6" style="left: 0pc; right: 0px; margin:auto">
                                                                                <div class="form-group">
                                                                                    <label for="degree4"><b>Tab 2</b></label>
                                                                                    <input type="text" name="tab2" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)" value="<?php echo e($tabs->tab2); ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6" style="left: 0pc; right: 0px; margin:auto">
                                                                                <div class="form-group">
                                                                                    <label for="degree3"><b>Tab 3</b></label>
                                                                                    <input type="text" name="tab3" class="form-control mb-4" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)" value="<?php echo e($tabs->tab3); ?>">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-success" type="submit" style="display: block; margin:30px auto 45px auto; width:200px">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                        <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                                    </svg> &nbsp;&nbsp;  Save
                                                </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


</div>


</div>




</div>

</div>
</div>
</div>

<!-- interest rate 1 Modal -->
<div class="modal fade" id="interestRate1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background:var(--dashboardCard)">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle" style="color:var(--blackText)"><b>Update <?php echo e($tabs->tab3); ?></b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('interestRate1.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-row" style="margin: 20px 0px;">
                        <div class="col-md-12 mb-12" style="margin-bottom: 10px ;">
                            <h4 class="text-center " style="color:var(--blackText)">Download <?php echo e($tabs->tab3); ?> file sample&nbsp; <a style="color:white" href="<?php echo e(Path::asset('file Samples/Interest Rate 1.xlsx')); ?>" download class="btn btn-success btn-small">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M15 10h4l-7 8-7-8h4v-10h6v10zm3.213-8.246l-1.213 1.599c2.984 1.732 5 4.955 5 8.647 0 5.514-4.486 10-10 10s-10-4.486-10-10c0-3.692 2.016-6.915 5-8.647l-1.213-1.599c-3.465 2.103-5.787 5.897-5.787 10.246 0 6.627 5.373 12 12 12s12-5.373 12-12c0-4.349-2.322-8.143-5.787-10.246z" />
                                    </svg>
                                </a></h4>
                            <br>
                        </div>
                        <div class="col-md-12 mb-12">
                            <br>
                            <input type="file" name="interestRate1_upload" class="form-control" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- fx rates Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background:var(--dashboardCard)">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle" style="color:var(--blackText)" >Update <?php echo e($tabs->tab1); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('rates.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-row" style="margin: 20px 0px;">
                        <div class="col-md-12 mb-12" style="margin-bottom: 10px ;">
                            <h4 class="text-center" style="color:var(--blackText)">Download <?php echo e($tabs->tab1); ?> file sample &nbsp;&nbsp; <a style="color:white" href="<?php echo e(Path::asset('file Samples/FX-RATE.xlsx')); ?>" download class="btn btn-success btn-small">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M15 10h4l-7 8-7-8h4v-10h6v10zm3.213-8.246l-1.213 1.599c2.984 1.732 5 4.955 5 8.647 0 5.514-4.486 10-10 10s-10-4.486-10-10c0-3.692 2.016-6.915 5-8.647l-1.213-1.599c-3.465 2.103-5.787 5.897-5.787 10.246 0 6.627 5.373 12 12 12s12-5.373 12-12c0-4.349-2.322-8.143-5.787-10.246z" />
                                    </svg>
                                </a></h4>
                            <br>
                        </div>
                        <div class="col-md-12 mb-12">
                            <br>
                            <input type="file" name="upload" class="form-control" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>



<!-- pta rates Modal -->
<div class="modal fade" id="pta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background:var(--dashboardCard)">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle" style="color:var(--blackText)"><b>Update <?php echo e($tabs->tab2); ?></b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('pta.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-row" style="margin: 20px 0px;">
                        <div class="col-md-12 mb-12" style="margin-bottom: 10px ;">
                            <h4 class="text-center" style="color:var(--blackText)">Download <?php echo e($tabs->tab2); ?> file sample&nbsp; <a style="color:white" href="<?php echo e(Path::asset('file Samples/PTA-RATE.xlsx')); ?>" download class="btn btn-success btn-small">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M15 10h4l-7 8-7-8h4v-10h6v10zm3.213-8.246l-1.213 1.599c2.984 1.732 5 4.955 5 8.647 0 5.514-4.486 10-10 10s-10-4.486-10-10c0-3.692 2.016-6.915 5-8.647l-1.213-1.599c-3.465 2.103-5.787 5.897-5.787 10.246 0 6.627 5.373 12 12 12s12-5.373 12-12c0-4.349-2.322-8.143-5.787-10.246z" />
                                    </svg>
                                </a></h4>
                            <br>
                        </div>
                        <div class="col-md-12 mb-12">
                            <br>
                            <input type="file" name="pta_upload" class="form-control" required>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="<?php echo e(Path::asset('admin/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(Path::asset('admin/assets/js/apps/contact.js')); ?>"></script>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo e(Path::asset('admin/assets/js/scrollspyNav.js')); ?>"></script>
<script src="<?php echo e(Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.js')); ?>"></script>

<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
</script>

<script src="<?php echo e(Path::asset('admin/plugins/highlight/highlight.pack.js')); ?>"></script>
<script src="<?php echo e(Path::asset('admin/assets/js/custom.js')); ?>"></script>
<!-- END GLOBAL MANDATORY STYLES -->
<script src="<?php echo e(Path::asset('admin/assets/js/scrollspyNav.js')); ?>"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.client.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CloudAppLaravel\resources\views/Client/rates.blade.php ENDPATH**/ ?>