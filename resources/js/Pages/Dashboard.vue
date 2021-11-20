<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Url Shortening
            </h2>
        </template>

        <div class="max-w-7xl h-52 mx-auto py-10 sm:px-6 lg:px-8">
            <url-post-card>
                <form @submit.prevent="formSubmit">
                    <div class="col-span-6 sm:col-span-4">
                        <jet-input
                            name="link"
                            type="url"
                            v-model="form.link"
                            class="mt-1 block w-full"
                            placeholder="https://example.com"
                        />
                        <jet-input-error :message="errors.link" class="mt-2" />
                    </div>
                    <br />
                    <div class="flex-reverse">
                        <jet-button
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Shorten Url
                        </jet-button>
                    </div>
                </form>
            </url-post-card>
        </div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <show-url-card :pLinks="links"></show-url-card>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import JetFormSection from "@/Jetstream/FormSection.vue";
import JetLabel from "@/Jetstream/Label.vue";
import JetInput from "@/Jetstream/Input.vue";
import JetInputError from "@/Jetstream/InputError.vue";
import UrlPostCard from "./components/UrlPostCard.vue";
import JetButton from "@/Jetstream/Button.vue";
import ShowUrlCard from "./components/ShowUrlCard.vue";

export default defineComponent({
    components: {
        AppLayout,
        JetButton,
        JetFormSection,
        JetLabel,
        JetInput,
        JetInputError,
        UrlPostCard,
        ShowUrlCard,
    },
    data() {
        return {
            form: this.$inertia.form({
                link: "",
            }),
        };
    },
    methods: {
        formSubmit() {
            this.form.post(this.route("generate.short.link"), {
                onFinish: () => {
                    this.form.reset("name", "location", "meals");
                },
            });
        },
    },
    props: {
        errors: Object,
        links: Object,
    },
});
</script>
