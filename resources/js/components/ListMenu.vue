<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    label: String,
    icon: String,
    path: String,
});
</script>

<template>
    <Link class="nav-link" :href="path">
        <div class="nav-link-icon">
            <!-- <i class="fa-solid fa-users"></i> -->
            <i class="fa-solid" :class="icon"></i>
        </div>
        {{ label }}
    </Link>
</template>
