<section class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 m-5">
        <div class="col" v-for="album in albums">
            <div class="card h-100 p-2">
            <img
                :src="album.poster"
                class="card-img-top p-2"
                :alt="album.title"
            />
            <div class="card-body">
                <h5 class="card-title text-white">{{ album.title }}</h5>
                <p class="card-text text-secondary">
                {{ album.author }}
                </p>
                <p class="card-text text-secondary">
                {{ album.year }}
                </p>
            </div>
            </div>
        </div>
    </div>
</section>
