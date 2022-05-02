<nav class="navbar navbar-light">
    <div class="container-fluid">
        <img class="img-top" src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="Spoty-logo" />
    </div>
    </nav>
    <div class="me-3">
        <span>Select genre: </span>
    <!-- @change per cambiare ogni volta l'emit che si vuole inviare all'app -->
        <select @change="filterDiscsByGenre" v-model="selectedGenre">
            <option value="all" selected>All</option>
            <option :value="genre.toLowerCase()" v-for="genre in genres">{{ genre }}</option>
        </select>
    </div>
</nav>