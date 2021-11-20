<template>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div
                class="
                    py-2
                    align-middle
                    inline-block
                    min-w-full
                    sm:px-6
                    lg:px-8
                "
            >
                <div
                    class="
                        shadow
                        overflow-hidden
                        border-b border-gray-200
                        sm:rounded-lg
                    "
                >
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    SLUG
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    URL
                                </th>
                                <th
                                    scope="col"
                                    class="
                                        px-6
                                        py-3
                                        text-left text-xs
                                        font-medium
                                        text-gray-500
                                        uppercase
                                        tracking-wider
                                    "
                                >
                                    CREATED AT
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="link in pLinks" :key="link.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div
                                                class="
                                                    text-sm
                                                    font-medium
                                                    text-gray-900
                                                "
                                            >
                                                <a
                                                    :href="link.shortened_url"
                                                    class="
                                                        no-underline
                                                        hover:underline
                                                        text-indigo-600 text-md
                                                    "
                                                    target="_blank"
                                                >
                                                    {{ link.shortened_url }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div
                                                class="
                                                    text-sm
                                                    font-medium
                                                    text-gray-900
                                                "
                                            >
                                                <a
                                                    :href="link.destination"
                                                    class="
                                                        no-underline
                                                        hover:underline
                                                        text-indigo-600 text-md
                                                    "
                                                    target="_blank"
                                                >
                                                    {{ link.destination }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div
                                                class="
                                                    text-sm
                                                    font-medium
                                                    text-gray-900
                                                "
                                            >
                                                {{ link.created_at }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";
export default defineComponent({
    props: {
        pLinks: Object,
    },
});
</script>

<style></style>
