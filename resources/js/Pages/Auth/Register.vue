<template>
    <Head title="Register" />
    <authentication>
        <div class="auth_div vivify fadeIn">
            <div class="auth_brand">
                <a class="navbar-brand" href="#"><img src="assets/images/icon.svg" width="50" class="d-inline-block align-top mr-2" alt="">Mooli</a>
            </div>

            <jet-validation-errors class="mb-4" />

            <div class="card">
                <div class="header">
                    <p class="lead">Create an account</p>
                </div>
                <div class="body">
                    <!-- <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign in with Facebook</button>
                    <div class="separator-linethrough"><span>OR</span></div> -->
                    <form class="form-auth-small" @submit.prevent="submit">

                        <div class="form-group c_form_group">
                            <jet-label for="name" value="Name" />
                            <input id="email" type="text" class="form-control" placeholder="Enter your email address" v-model="form.name" required autofocus autocomplete="name" />
                        </div>

                        <div class="form-group c_form_group">
                            <jet-label for="email" value="Email" />
                            <input id="email" type="email" class="form-control" placeholder="Enter your email address" v-model="form.email" required />
                        </div>

                        <div class="form-group c_form_group">
                            <jet-label for="password" value="Password" />
                            <input id="password" type="password" class="form-control" placeholder="Enter password" v-model="form.password" required autocomplete="new-password" />
                        </div>

                        <div class="form-group c_form_group">
                            <jet-label for="password_confirmation" value="Confirm Password" />
                            <input id="password_confirmation" type="password" class="form-control" placeholder="Enter password" v-model="form.password_confirmation"  required autocomplete="new-password" />
                        </div>

                        <div class="mt-4" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
                            <jet-label for="terms">
                                <div class="flex items-center">
                                    <jet-checkbox name="terms" id="terms" v-model:checked="form.terms" />

                                    <div class="ml-2">
                                        I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                                    </div>
                                </div>
                            </jet-label>
                        </div>

                        <button type="submit" class="btn btn-dark btn-lg btn-block" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Register</button>
                        <div class="bottom">
                            <span>Already have an account? <Link :href="route('login')" >Login</Link></span>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </authentication>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import Authentication from '@/Layouts/AuthLayout';

    export default defineComponent({
        components: {
            Head,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Link,
            Authentication,
        },

        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    terms: false,
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    })
</script>
