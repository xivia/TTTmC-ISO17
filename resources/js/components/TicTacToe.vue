<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">TIC TAC TOE HERE</div>

                    <div class="card-body">
                        #donewithvue.js<br>
                        <table style="border: 1px solid black; width:15%;">
                            <tr style="border: 1px solid black;">
                                <th style="border: 1px solid black;">_</th>
                                <th style="border: 1px solid black;">_</th>
                                <th style="border: 1px solid black;">_</th>
                            </tr>
                            <tr style="border: 1px solid black;">
                                <th style="border: 1px solid black;">_</th>
                                <th style="border: 1px solid black;">_</th>
                                <th style="border: 1px solid black;">_</th>
                            </tr>
                            <tr style="border: 1px solid black;">
                                <th style="border: 1px solid black;">_</th>
                                <th style="border: 1px solid black;">_</th>
                                <th style="border: 1px solid black;">_</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
