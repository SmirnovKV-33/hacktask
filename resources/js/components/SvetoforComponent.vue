<template>
        <div class="card w-100" style="border-radius: 6px;">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Идентификатор светофора</label>
                        <input type="text" v-model="numberid" class="form-control" id="exampleFormControlInput1" placeholder="45674">
                    </div>
                    Всего в системе - 100 светофоров.
                    <table class="table table-bordered border-dark">
                    <thead>
                    <tr>
                        <th scope="col">Светофор ID</th>
                        <th scope="col">Скорость средняя</th>
                        <th scope="col">Загруженность </th>
                    </tr>
                    </thead>
                    <tbody v-if="numberid.length == 0">
                    <tr v-for="i in 100">
                        <th scope="row">{{ i }}</th>
                        <td>{{ getRandomInt(20, 150) }} км/ч</td>
                        <td>{{ getRandomInt(20, 90) }}%</td>
                    </tr>
                    </tbody>
                    <tbody v-else>
                    <tr>
                        <th scope="row">{{ numberid }}</th>
                        <td>{{ getRandomInt(20, 150) }} км/ч</td>
                        <td>{{ getRandomInt(20, 90) }}%</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
</template>
<script>
    export default {
        data: function () {
            return {
                numberid: "",
            }
        },

        methods: {
     
            getRandomArbitrary: function(min, max) {
                return Math.random() * (max - min) + min;
            },
            
            getRandomInt: function(min, max) {
                min = Math.ceil(min);
                max = Math.floor(max);
                return Math.floor(Math.random() * (max - min + 1)) + min;
            },
        }
      
    }
</script>



    