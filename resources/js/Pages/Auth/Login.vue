<template>
    <Head title="Log in" />
    <authentication>
        <div class="auth_div vivify fadeIn">
            <div class="auth_brand">
                <a class="navbar-brand" href="#"><img :src="'storage/images/icon.svg'" width="50" class="d-inline-block align-top mr-2" alt="">Mooli</a>
            </div>


            <jet-validation-errors class="mb-4" />

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <div class="card">
                <div class="header">
                    <p class="lead">Login to your account</p>
                </div>
                <div class="body">
                    <form class="form-auth-small" @submit.prevent="submit">
                        <div class="form-group c_form_group">
                            <jet-label for="email" value="Email" />
                            <input type="email" class="form-control" placeholder="Enter your email address" v-model="form.email" required autofocus />
                        </div>
                        <div class="form-group c_form_group">
                            <jet-label for="password" value="Password" />
                            <input type="password" class="form-control" placeholder="Enter your password" v-model="form.password" required autocomplete="current-password" />
                        </div>
                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <jet-checkbox name="remember" v-model:checked="form.remember" />
                                <span>Remember me</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-dark btn-lg btn-block" :disabled="form.processing">LOGIN</button>
                        <div class="bottom">
                            <span class="helper-text m-b-10"><i class="fa fa-lock mr-1"></i><a :href="route('password.request')">Forgot password?</a></span>
                            <span>Don't have an account? <a :href="route('register')">Register</a></span>
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

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                .transform(data => ({
                    ... data,
                    remember: this.form.remember ? 'on' : ''
                }))
                .post(this.route('login'), {
                    onFinish: () => this.form.reset('password'),
                })
            }
        }
    })
</script>
