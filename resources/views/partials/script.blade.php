<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    //message with toastr
    @if (session()->has('success'))

        toastr.success('{{ session('success') }}', 'BERHASIL!');
    @elseif (session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!');
    @endif
</script>

<script type="module">
    // Fungsi untuk menutup details yang lain saat satu details dibuka
    function toggleDetails(detailsId) {
        $('details').each(function() {
            if (this.id === detailsId) {
                // Toggle atribut 'open' pada details yang diklik
                $('details').attr('open')
            } else {
                // Tutup yang lain
                $(this).removeAttr('open');
            }
        });
    }

    // Menangani klik pada setiap summary
    $('details summary').on('click', function() {
        var parentId = $(this).parent().prop('id');

        // Periksa apakah details yang diklik sudah terbuka
        if ($(this).parent().prop('open')) {
            // Jika sudah terbuka, tutup details tersebut
            $(this).removeAttr('open');
        } else {
            // Jika belum terbuka, toggle semua details dan buka yang diklik
            toggleDetails(parentId);
        }
    });

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

    $(document).ready(function() {
        // Menggunakan jQuery untuk menangani peristiwa klik di luar dropdown
        $(document).on('click', function(event) {
            // Periksa apakah yang diklik bukan bagian dari dropdown
            if (!$(event.target).closest('.dropdown').length) {
                // Sembunyikan dropdown jika yang diklik bukan bagian dari dropdown
                $('.dropdown input[type="checkbox"]').prop('checked', false);
            }
        });

        // Menangani klik pada label (hamburger icon)
        $('.swap-rotate').on('click', function() {
            // Toggle checkbox ketika label diklik
            $(this).find('input[type="checkbox"]').prop('checked', function(i, value) {
                return !value;
            });
        });

    });
</script>
