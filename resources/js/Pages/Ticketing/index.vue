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
                <div class="card-header">Fluid Layout Example</div>
                <div class="card-body">
                    This is a second layout option that uses the
                    <code>.container-fluid.px-4</code>
                    element for the page header and main page content
                    containers. If you expand the width of this page, the
                    content will keep expanding with the screen, regardless of
                    the screen width. On smaller screens, this will look no
                    different than the default boxed layout which uses default
                    <code>.container-xl.px-4</code>
                    elements.
                </div>
            </div>
        </div>
    </Layout>
</template>
