<script setup>
import Layout from "../Layout/app.vue";
</script>

<template>
    <Layout>
        <header
            class="page-header page-header-compact page-header-light border-bottom bg-white mb-4"
        >
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div
                        class="row align-items-center justify-content-between pt-3"
                    >
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon">
                                    <i data-feather="user"></i>
                                </div>
                                Ticketing list
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <div class="card">
                <div class="card-header">Ticket Request</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Code Request</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BBA00029</td>
                                <td>Orion</td>
                                <td>Revisi</td>
                                <td>Request</td>
                                <td>
                                    <button type="button" class="btn btn-link">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>BBA00029</td>
                                <td>Orion</td>
                                <td>Revisi</td>
                                <td>Request</td>
                                <td>
                                    <button type="button" class="btn btn-link">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>BBA00029</td>
                                <td>Orion</td>
                                <td>Revisi</td>
                                <td>Request</td>
                                <td>
                                    <button type="button" class="btn btn-link">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <div class="span">asd</div>
                        <nav
                            aria-label="Page navigation example d-flex justify-content-end"
                        >
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
