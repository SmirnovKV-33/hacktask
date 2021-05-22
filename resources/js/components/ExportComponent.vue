<template>
          <div class="card w-100" style="border-radius: 6px;">
                <div class="card-body">
                    <h4>Экспортируйте данные движения:</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Формат SQL
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Формат JSON
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Формат EXEL
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Формат CSV
                        </label>
                    </div>
                    <button type="button mt-3" class="btn btn-primary">Скачать данные</button>

                </div>
        </div>
</template>
<script>
    export default {
      mounted(){
          
      },
      data: function () {
            return {
                data: 0,
                
            }
        },

        methods: {
            
        }
      
    }
</script>



    