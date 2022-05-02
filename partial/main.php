<section class="container-fluid">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 m-5">
        <div class="col" v-for="disc in filteredDiscs">
            <div class="card h-100 p-2">
            <img
                :src="disc.poster"
                class="card-img-top p-2"
                :alt="disc.title"
            />
            <div class="card-body">
                <h5 class="card-title text-white">{{ disc.title }}</h5>
                <p class="card-text text-secondary">
                {{ disc.author }}
                </p>
                <p class="card-text text-secondary">
                {{ disc.year }}
                </p>
            </div>
            </div>
        </div>
    </div>
</section>
