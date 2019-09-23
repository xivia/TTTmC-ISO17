<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">TIC TAC TOE HERE</div>

                    <div class="card-body">
                        #donewithvue.js<br>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-4 border-right border-bottom tic-tac-toe-box"></div>
                                <div class="col-4 border-left border-right border-bottom tic-tac-toe-box"></div>
                                <div class="col-4 border-left border-bottom tic-tac-toe-box"></div>
                            </div>
                            <div class="row">
                                <div class="col-4 border-right border-top border-bottom tic-tac-toe-box"></div>
                                <div class="col-4 border-left border-right border-top border-bottom tic-tac-toe-box"></div>
                                <div class="col-4 border-left border-top border-bottom tic-tac-toe-box"></div>
                            </div>
                            <div class="row">
                                <div class="col-4 border-right border-top tic-tac-toe-box"></div>
                                <div class="col-4 border-left border-right border-top tic-tac-toe-box"></div>
                                <div class="col-4 border-left border-top tic-tac-toe-box"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.border-right{
    border-right: 1px solid black;
}

.border-left{
    border-left: 1px solid black;
}

.border-top{
    border-top: 1px solid black;
}

.border-bottom {
    border-bottom: 1px solid black;
}

.tic-tac-toe-box{
    height: 150px!important;
}
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
