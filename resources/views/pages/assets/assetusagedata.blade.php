@extends('layouts.main')
@section('isipage')
    <!--begin::Container-->
    <div id="kt_content_container" class="container">
        
        <!--begin::Row-->
        <div class="row g-xxl-9">
            <!--begin::Col-->
            <div class="col-xxl-8">
                <!--begin::Earnings-->
                <div class="card card-xxl-stretch mb-5 mb-xxl-10">
                    <!--begin::Header-->
                   
                    <!--end::Header-->
                    <!--begin::Body-->
                    
                    <!--end::Body-->
                </div>
                <!--end::Earnings-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xxl-4">
                <!--begin::Invoices-->
                <div class="card card-xxl-stretch mb-5 mb-xxl-10">
                    <!--begin::Header-->
                   
                    <!--end::Header-->
                    <!--begin::Body-->
                    
                    <!--end::Body-->
                </div>
                <!--end::Invoices-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Statements-->
        <div class="card">
            <!--begin::Header-->
            <div class="card-header card-header-stretch">
                <!--begin::Title-->
                <div class="card-title">
                   
                </div>
                <!--end::Title-->
                <!--begin::Toolbar-->
                <div class="card-toolbar m-0">
                    <!--begin::Tab nav-->
                    <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs border-transparent" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a id="kt_referrals_year_tab" class="nav-link text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_referrals_1">This Year</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="kt_referrals_2019_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_2">2019</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="kt_referrals_2018_tab" class="nav-link text-active-gray-800 me-4" data-bs-toggle="tab" role="tab" href="#kt_referrals_3">2018</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="kt_referrals_2017_tab" class="nav-link text-active-gray-800 ms-8" data-bs-toggle="tab" role="tab" href="#kt_referrals_4">2017</a>
                        </li>
                    </ul>
                    <!--end::Tab nav-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Tab Content-->
            <div id="kt_referred_users_tab_content" class="tab-content">
                <!--begin::Tab panel-->
                <div id="kt_referrals_1" class="card-body p-0 tab-pane fade show active" role="tabpanel">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                            <!--begin::Thead-->
                            <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                <tr>
                                    <th class="min-w-175px ps-9">Date</th>
                                    <th class="min-w-100px px-0">Asset ID</th>
                                    <th class="min-w-180px">Details</th>
                                    <th class="min-w-180px">Name</th>
                                    <th class="min-w-180px text-center">Division</th>
                                </tr>
                            </thead>
                            <!--end::Thead-->
                            <!--begin::Tbody-->
                            <tbody class="fs-6 fw-bold text-gray-600">
                                <tr>
                                    <td class="ps-9">March 12, 2022</td>
                                    <td>10245</td>
                                    <td>iPhone 13</td>
                                    <td>Budi Waseto</td>
                                    <td class="text-center">Testing</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">March 10, 2022</td>
                                    <td class="ps-0">10145</td>
                                    <td>Samsung M20</td>
                                    <td>Yunita</td>
                                    <td class="text-center">Testing</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">March 10, 2022</td>
                                    <td class="ps-0">10246</td>
                                    <td >iPhone 13</td>
                                    <td>Angga Sudirman</td>
                                    <td class="text-center">Testing</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Feb 27, 2022</td>
                                    <td class="ps-0">10245</td>
                                    <td>iPhone 13</td>
                                    <td>Budi Waseto</td>
                                    <td class="text-center">Testing</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Feb 26, 2022</td>
                                    <td class="ps-0">10148</td>
                                    <td>Xiomi 11T</td>
                                    <td>Yunita</td>
                                    <td class="text-center">Testing</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Feb 26, 2022</td>
                                    <td class="ps-0">10245</td>
                                    <td>iPhone 13</td>
                                    <td>Angga Sudirman</td>
                                    <td class="text-center">Testing</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Feb 15, 2022</td>
                                    <td class="ps-0">10247</td>
                                    <td>iPhone 12</td>
                                    <td>Budi Waseto</td>
                                    <td class="text-center">Testing</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Feb 15, 2022</td>
                                    <td class="ps-0">10147</td>
                                    <td>Xiomi 11T</td>
                                    <td>Yunita</td>
                                    <td class="text-center">Testing</td>
                                </tr>
                                <tr>
                                    <td class="ps-9">Feb 15, 2022</td>
                                    <td class="ps-0">10246</td>
                                    <td>iPhone 13</td>
                                    <td>Angga Sudirman</td>
                                    <td class="text-center">Testing</td>
                                </tr>
                            </tbody>
                            <!--end::Tbody-->
                            
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Tab panel-->
               
            </div>
            <!--end::Tab Content-->
        </div>
        <!--end::Statements-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->
@endsection
<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/modals/create-app.js"></script>
		<script src="assets/js/custom/modals/upgrade-plan.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->