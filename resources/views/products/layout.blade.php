<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD Application with Image Upload - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>

<div class="container">
    @yield('content')
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Modal image script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.open-modal').forEach(function(img) {
        img.addEventListener('click', function() {
            var modalImg = document.getElementById('modalImage');
            modalImg.src = this.getAttribute('data-img');
        });
    });
});
</script>

</body>
</html>