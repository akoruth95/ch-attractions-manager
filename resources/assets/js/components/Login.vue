<template>
    <form class="form" @submit.prevent="login">
        <h1 class="form__title">Welcome back!</h1>
        <div class="form__group">
            <label>Email</label>
            <input type="text" class="form__control">
            <!-- <small class="error__control" v-if="error.email">{{error.email[0]}}</small> -->
        </div>
        <div class="form__group">
            <label>Password</label>
            <input type="password" class="form__control">
            <!-- <small class="error__control" v-if="error.password">{{error.password[0]}}</small> -->
        </div>
        <div class="form__group">
            <button class="btn btn__primary">Login</button>
        </div>
    </form>
</template>

<script type="text/javascript">

</script>
