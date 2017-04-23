<template>
  <transition name="modal">
    <div class="modal-mask">
      <div class="close" @click="$emit('close')"></div>
      <div class="modal-wrapper">
        <div class="modal-container">
          <div class="modal-header">
            <slot name="header">
              Review:
            </slot>
          </div>

          <div class="modal-body">
            <textarea v-model="comment"></textarea>
          </div>
          <div class="modal-footer">
            <slot name="footer">
              <button type="button" class="btn btn-primary" @click="submitComment">
                  Submit
              </button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
 </div>

</template>

<script>

export default {
  props: ['attractionId'],

  data () {
    return {
      comment: ""
    }
  },
  components: {

  },
  methods: {
    submitComment() {
      axios.post('/comments', {
       body: this.comment,
       attraction_id: this.attractionId,
     })
     .then((response) => {
       console.log('SubmitComment -> post success');
       console.log(response.data);
       this.$evt.$emit('newComment', { // passes goal from landing page to calorie counter component
        newComment: response.data,
       })
     })
     .catch((error) => {
       console.error('SubmitComment -> post error');
       // show an error message
     });
   },
    }
  }

</script>

<style>
.close {
  position: absolute;
  right: 32px;
  top: 32px;
  width: 32px;
  height: 32px;
  opacity: 0.3;
  cursor: pointer;
}
.close:hover {
  opacity: 1;
}
.close:before, .close:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 33px;
  width: 2px;
  background-color: red;
}
.close:before {
  transform: rotate(45deg);
}
.close:after {
  transform: rotate(-45deg);
}
.filler {
  width: 50%;
  height: 5px;
  visibility: hidden;
}
.modal-mask {
position: fixed;
z-index: 9998;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, .5);
display: table;
transition: opacity .3s ease;
}
.modal-wrapper {
display: table-cell;
vertical-align: middle;
}
.modal-container {
width: 300px;
margin: 0px auto;
padding: 20px 30px;
background-color: #fff;
border-radius: 2px;
box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
transition: all .3s ease;
font-family: Helvetica, Arial, sans-serif;
}
.modal-header h3 {
margin-top: 0;
color: #42b983;
}
.modal-body {
margin: 20px 0;
}
.modal-default-button {
float: right;
}
.modal-enter {
  opacity: 0;
}
.modal-leave-active {
  opacity: 0;
}
.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>
