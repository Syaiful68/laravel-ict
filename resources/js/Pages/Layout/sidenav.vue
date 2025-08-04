<script setup>
import { ref } from "vue";
import ListMenu from "../../components/ListMenu.vue";

const collapseMenu = ref(true);

function toggleMenu() {
    return (collapseMenu.value = !collapseMenu.value);
}

const Menus = [
    { label: "Dashboard", icons: "fa-chart-bar", path: "/dashboard" },
    { label: "My Tickets", icons: "fa-edit", path: "/ticket" },
    { label: "Couriers", icons: "fa-tachometer-fast", path: "/courier" },
    { label: "Reports", icons: "fa-clipboard-list", path: "/report" },
    { label: "Users", icons: "fa-users", path: "/user" },
];
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
                    <!-- <div
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
                    </div> -->
                    <!-- Sidenav Link (Charts)-->

                    <ListMenu
                        v-for="(item, index) in Menus"
                        :key="index"
                        :label="item.label"
                        :icon="item.icons"
                        :path="item.path"
                    ></ListMenu>
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
