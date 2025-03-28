<script setup>
import { computed } from 'vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';

const props = defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    code: ''
});

const submit = () => {
    form.post(route('verify.code'));
};

const verificationLinkSent = computed(
    () => props.status === 'verification-link-sent',
);
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Mobile Number Verification" />

        <div class="mb-4 text-sm text-gray-600">
            Thanks for signing up! Before getting started, could you verify your
            mobile number by vefirying the pin we have sent to your mobile number? If you
            didn't receive the pin, we will gladly send you another.
        </div>

        <div
            class="mb-4 text-sm font-medium text-green-600"
            v-if="verificationLinkSent"
        >
            A new verification link has been sent to the email address you
            provided during registration.
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="code" value="Code (4-digits)" />

                <TextInput
                    id="code"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.code"
                    required
                    autofocus
                    autocomplete="code"
                />

                <InputError class="mt-2" :message="form.errors.code" />
            </div>

            <div class="mt-4 flex items-center gap-2">
                <PrimaryButton
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Verify Code
                </PrimaryButton>

                <Link
                    :href="route('resend.code')"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Resend Code
                </Link>
            </div>
        </form>
    </AuthenticatedLayout>
</template>
