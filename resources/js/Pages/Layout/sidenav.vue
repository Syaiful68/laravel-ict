<script setup>
import { ref } from "vue";

const collapseMenu = ref(true);

function toggleMenu() {
    return (collapseMenu.value = !collapseMenu.value);
}
</script>

<template>
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <!-- Sidenav Menu Heading (Core)-->
                    <div class="sidenav-menu-heading">Menus</div>
                    <!-- Sidenav Accordion (Dashboard)-->
                    <!-- <a
                        class="nav-link"
                        :class="{ collapsed: collapseMenu === true }"
                        @click="toggleMenu"
                    >
                        <div class="nav-link-icon">
                            <i class="fa-solid fa-chart-bar"></i>
                        </div>
                        Ticketing
                        <div class="sidenav-collapse-arrow">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </a> -->
                    <div
                        class="collapse"
                        :class="{ show: collapseMenu === false }"
                        id="collapseDashboards"
                        data-bs-parent="#accordionSidenav"
                    >
                        <nav
                            class="sidenav-menu-nested nav accordion"
                            id="accordionSidenavPages"
                        >
                            <a class="nav-link" href="dashboard-1.html">
                                ICT
                            </a>
                            <a class="nav-link" href="dashboard-2.html">CCC</a>
                        </nav>
                    </div>
                    <!-- Sidenav Link (Charts)-->
                    <a class="nav-link" href="charts.html">
                        <div class="nav-link-icon">
                            <!-- <i class="fa-solid fa-users"></i> -->
                            <i class="fa-solid fa-chart-bar"></i>
                        </div>
                        Ticketing
                    </a>
                    <a class="nav-link" href="charts.html">
                        <div class="nav-link-icon">
                            <!-- <i class="fa-solid fa-users"></i> -->
                            <i class="fa-solid fa-edit"></i>
                        </div>
                        My Ticket
                    </a>
                    <a class="nav-link" href="charts.html">
                        <div class="nav-link-icon">
                            <!-- <i class="fa-solid fa-users"></i> -->
                            <i class="fa-solid fa-tachometer-fast"></i>
                        </div>
                        Couriers
                    </a>
                    <a class="nav-link" href="charts.html">
                        <div class="nav-link-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        Users
                    </a>
                    <a class="nav-link" href="charts.html">
                        <div class="nav-link-icon">
                            <i class="fa-solid fa-clipboard-list"></i>
                        </div>
                        Reports
                    </a>
                </div>
            </div>
            <!-- Sidenav Footer-->
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Logged in as:</div>
                    <div class="sidenav-footer-title">Valerie Luna</div>
                </div>
            </div>
        </nav>
    </div>
</template>
