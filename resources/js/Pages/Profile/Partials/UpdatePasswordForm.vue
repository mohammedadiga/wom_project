<template>
  <form @submit.prevent="updatePassword">
    <div class="col-lg-12 col-md-12">
    <h6></h6>
    <div class="form-group c_form_group">
        <label for="current_password" >Current Password</label>
        <input id="current_password" type="password" class="form-control" placeholder="Enter Password" v-model="form.current_password" ref="current_password" autocomplete="current-password" required>
        <jet-input-error :message="form.errors.current_password" class="mt-2" />
    </div>
    <div class="form-group c_form_group">
        <label for="password">New Password</label>
        <input id="password" type="password" class="form-control" placeholder="Enter Password" v-model="form.password" ref="password" autocomplete="new-password" required>
        <jet-input-error :message="form.errors.password" class="mt-2" />
    </div>
    <div class="form-group c_form_group">
        <label for="password_confirmation">Confirm New Password</label>
        <input id="password_confirmation" type="password" class="form-control" v-model="form.password_confirmation" placeholder="Enter Password" autocomplete="new-password" required>
        <jet-input-error :message="form.errors.password_confirmation" class="mt-2" />
    </div>
    </div>
    <button type="submit" class="btn btn-primary theme-bg gradient" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Update</button>
  </form>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetActionMessage from '@/Jetstream/ActionMessage.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetFormSection from '@/Jetstream/FormSection.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetInputError from '@/Jetstream/InputError.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            Link,
            Head,
        },

        data() {
            return {
                form: this.$inertia.form({
                    current_password: '',
                    password: '',
                    password_confirmation: '',
                }),
            }
        },

        methods: {
            updatePassword() {
                this.form.put(route('user-password.update'), {
                    errorBag: 'updatePassword',
                    preserveScroll: true,
                    onSuccess: () => this.form.reset(),
                    onError: () => {
                        if (this.form.errors.password) {
                            this.form.reset('password', 'password_confirmation')
                            this.$refs.password.focus()
                        }

                        if (this.form.errors.current_password) {
                            this.form.reset('current_password')
                            this.$refs.current_password.focus()
                        }
                    }
                })
            },
        },
    })
</script>
