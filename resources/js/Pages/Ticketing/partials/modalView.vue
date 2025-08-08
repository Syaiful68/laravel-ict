<script setup>
import { router, usePage } from "@inertiajs/vue3";
import { computed, reactive } from "vue";

defineProps({
    errors: Object,
});

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
        subCategori: [{ label: "Error", name: "error" }],
    },
];

const page = usePage();

const formData = reactive({
    _token: page.props.auth.csrf,
    category: null,
    subcategory: null,
    description: null,
    file: null,
});

const subCategories = computed(() => {
    if (formData.category) {
        return formData.category.subCategori;
    }
    return [];
});

function submitTicket() {
    router.post("/ticket", formData, {
        forceFormData: true,
    });
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
                                :class="{ 'is-invalid': errors.category }"
                            >
                                <option value="0">Choise</option>
                                <option
                                    v-for="(item, index) in Categories"
                                    :key="index"
                                    :value="item"
                                >
                                    {{ item.label }}
                                </option>
                            </select>
                            <div class="invalid-feedback">
                                {{ errors.category }}
                            </div>
                        </div>
                        <div class="mb-3" v-if="formData.category !== null">
                            <label class="form-label">Sub Category</label>
                            <select
                                class="form-control"
                                v-model="formData.subcategory"
                                :class="{ 'is-invalid': errors.subcategory }"
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
                            <div class="invalid-feedback">
                                {{ errors.subcategory }}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea
                                class="form-control"
                                rows="5"
                                v-model="formData.description"
                                :class="{ 'is-invalid': errors.description }"
                            ></textarea>
                            <div class="invalid-feedback">
                                {{ errors.description }}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input
                                type="file"
                                class="form-control"
                                @input="formData.file = $event.target.files[0]"
                            />
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
                            Save
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
