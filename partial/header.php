<nav class="navbar navbar-light">
    <div class="container-fluid">
        <img class="img-top" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngfind.com%2Fmpng%2FiooTxb_spotify-logo-png-free-transparent-png-logos-rh%2F&psig=AOvVaw3OauKzvZAdem6wxbKy8rB_&ust=1650728849677000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCJjw5q2CqPcCFQAAAAAdAAAAABAD" alt="Spoty-logo" />
    </div>
    </nav>
    <div class="me-3">
    <!-- @change per cambiare ogni volta l'emit che si vuole inviare all'app -->
    <select class="form-select form-select-sm">
        <option value="">All</option>
        <option v-for="album in albums">
        {{ album.genre }}
        </option>
    </select>
    </div>
</nav>