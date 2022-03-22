@extends('layouts.main')
@section('isipage')
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Shift Schedule</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bolder text-muted bg-light">
                        <th class="ps-4 min-w-300px rounded-start">Name</th>
                        <th class="min-w-125px">ID</th>
                        <th class="min-w-200px">Division</th>
                        <th class="min-w-175px">Shift</th>
                        <th class="min-w-175px text-center">Action</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light">
                                        <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                    </span>
                                </div>
                                <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Nabila Karima Azka</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">072827</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Backend Developer</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Work From Home</a>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light">
                                        <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                    </span>
                                </div>
                                <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Nabila Karima Azka</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">072827</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Backend Developer</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Work From Home</a>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light">
                                        <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                    </span>
                                </div>
                                <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Nabila Karima Azka</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">072827</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Backend Developer</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Work From Home</a>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light">
                                        <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                    </span>
                                </div>
                                <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Nabila Karima Azka</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">072827</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Backend Developer</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Work From Home</a>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
                                    <span class="symbol-label bg-light">
                                        <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                    </span>
                                </div>
                                <div class="d-flex justify-content-start flex-column">
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Nabila Karima Azka</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">072827</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Backend Developer</a>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">Work From Home</a>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                            <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Edit</a>
                        </td>
                    </tr>
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
@endsection