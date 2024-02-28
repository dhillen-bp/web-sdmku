<script type="module">
    // Menangani Scroll pada Header Navbar
    $(document).ready(function() {
        // Mendeteksi pergerakan scroll
        $(window).scroll(function() {
            // Hitung posisi scroll dalam piksel
            var scrollPosition = $(window).scrollTop();

            $('#header').removeClass('bg-opacity-10');
            $('#header').addClass('bg-opacity-95');

            if (scrollPosition === 0) {
                $('#header').removeClass('bg-opacity-95');
                $('#header').addClass('bg-opacity-10');
            }
        });
    });
</script>
