<template>
        <div v-bind:class="defineCor">
        <div class="panel-heading">{{titulo}}</div>

        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props:['titulo', 'cor'],
        computed:{
            defineCor: function(){
                //se não existir, usa a cor padrão panel-default
                return "panel "+(this.cor || "panel-default");
            }
        }
    }
</script>

<style media="screen">

    .blue {
    border-color: #240358;
    }

    .blue > .panel-heading {
    color: #e4ece4;
    background-color: #240358;
    border-color: #240358;
    }

    .orange {
    border-color: #e85e0d;
    }

    .orange > .panel-heading {
    color: #e4ece4;
    background-color: #e85e0d;
    border-color: #e85e0d;
    }
   
</style>
