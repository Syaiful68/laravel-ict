<script setup>
import { router, usePage } from "@inertiajs/vue3";
import { computed, reactive } from "vue";

const Categories = [
    {
        id: 1,
        label: "Orion",
        name: "orion",
        subCategori: [
            { label: "Revisi", name: "revisi" },
            { label: "Cancel", name: "cancel" },
        ],
    },
    {
        id: 2,
        label: "User",
        name: "user",
        subCategori: [
            { label: "Orion", name: "orion" },
            { label: "SCA", name: "sca" },
        ],
    },
    {
        id: 3,
        label: "Dashboard",
        name: "dashboard",
    },
];

const page = usePage();

const formData = reactive({
    _token: page.props.csrf_token,
    category: "",
    subcategory: "",
    description: null,
});

const subCategories = computed(() => {
    if (formData.category) {
        return formData.category.subCategori;
    }
    return [];
});

function submitTicket() {
    router.post("/ticket", formData);
}
</script>

<template>
    <div class="modal modal-blur" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form @submit.prevent="submitTicket">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Default Bootstrap Modal
                        </h5>
                        <button
                            class="btn-close"
                            type="button"
                            @click="$emit('toggle')"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select
                                v-model="formData.category"
                                class="form-control"
                            >
                                <option value="0">Choise</option>
                                <option
                                    v-for="(item, index) in Categories"
                                    :key="index"
                                    :value="item"
                                >
                                    {{ item.name }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-3" v-if="formData.category">
                            <label class="form-label">Sub Category</label>
                            <select
                                class="form-control"
                                v-model="formData.subcategory"
                            >
                                <option value="0">Choise</option>
                                <option
                                    v-for="(item, index) in subCategories"
                                    :key="index"
                                    :value="item.name"
                                >
                                    {{ item.label }}
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            class="btn btn-secondary"
                            type="button"
                            @click="$emit('toggle')"
                        >
                            Close</button
                        ><button class="btn btn-primary" type="submit">
                            Save changes
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<style scoped>
.modal {
    display: block;
}
</style>
