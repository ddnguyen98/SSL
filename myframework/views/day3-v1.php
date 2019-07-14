<html>
    <div class="container my-1">
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-1" data-toggle="modal" data-target="#m1">
        Modal Test
        </button>

    <!-- Modal -->
        <div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="mlabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mlabel1">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        This is a modal with content
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-1">
    <!-- Carosal -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner" style="height: 500px">
                <div class="carousel-item active">
                    <img src="assets/img/dog1.jpg" style="height: 600px" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/dog2.jpg" style="height: 600px" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/dog3.jpg" style="height: 600px" class="d-block w-100" alt="">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</html>