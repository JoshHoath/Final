<template>
    <div class="search-bar">
        <div class="input-group">

                <input type="text"
                @keyup.enter="getGifs"
                v-model="criteria"
                placeholder="Search for GIFs"
                />
                <button type="button" class="btn btn-success" @click.prevent="getGifs">Search</button>

            <input type="hidden" v-model="selectedGif"/>
        </div>
        <div class="dropdown">
            <div class="dropdown-menu" :class="{ 'show' : dropdownOpen }">
                <a
                    href="#"
                    v-for="gif in gifs"
                    class="dropdown-item"
                    @click="selectGif(gif.images)">

                    <img :src="gif.images.fixed_width.url" />
                </a>
            </div>
        </div>
        <div v-show="selectedGif" class="card selectedGifPreview">

            <div class="card-body">
                <img :src="selectedGif" />
                <br />
                <a href="#" class="btn btn-sm btn-danger" @click="selectedGif=''">x</a>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                criteria: null,
                apiKey: 'n5fMNDU27YfiZbJExcTeYO7vI1p2euk4',
                limit: 10,
                gifs: [],
                dropdownOpen: false,
                selectedGif: ''
            }
        },

        methods: {
            getGifs() {

                if(!this.criteria){
                    return false;
                }
                console.log(this.critera);


                this.gifs = [],
                this.dropdownOpen = false;

                axios.get('https://api.giphy.com/v1/gifs/search?q=' + this.criteria + '&api_key=' + this.apiKey + '&limit=' + this.limit)
                    .then((response) => {
                        this.loadGifs(response.data.data)
                        console.log(response);

                    });
            },

            loadGifs(data) {
                this.gifs = data;

                this.dropdownOpen = true;
            },

            selectGif(gif) {

                console.log(gif);
                this.selectedGif = gif.fixed_height.url;

                this.dropdownOpen = false;
            },

            doFocus() {
                if(this.criteria) this.dropdownOpen = true;
            }
        }
    }
</script>
