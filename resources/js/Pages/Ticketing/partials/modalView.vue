<script setup>
const Category = [
    { label: "Orion", name: "orion" },
    { label: "Hybrid", name: "hybrid" },
    { label: "Dashboard", name: "dashboard" },
    { label: "User", name: "user" },
];
</script>

<template>
    <div
        class="modal modal-blur"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
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
                        <select class="form-control">
                            <option value="">Choise</option>
                            <option
                                v-for="(item, index) in Category"
                                :key="index"
                                :value="item.name"
                            >
                                {{ item.label }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sub Category</label>
                        <select class="form-control">
                            <option value="">Choise</option>
                            <option
                                v-for="(item, index) in Category"
                                :key="index"
                                :value="item.name"
                            >
                                {{ item.label }}
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" row="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        class="btn btn-secondary"
                        type="button"
                        @click="$emit('toggle')"
                    >
                        Close</button
                    ><button class="btn btn-primary" type="button">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.modal {
    display: block;
}
</style>
