@extends('layouts.app')

@section('title', 'Asset Ruang 2')

@section('content')
<section class="asset-section">
    <nav class="breadcrumb">
        <a href="/" class="breadcrumb-item home">
            <span class="home-icon"><i class='bx bx-home-alt'></i></span>
        </a>
        <span class="breadcrumb-separator">></span>
        <a href="{{ url('/Ruang2') }}" class="breadcrumb-item">Ruang 2</a>
        <span class="breadcrumb-separator">></span>
        <span class="breadcrumb-item active">Asset Data</span>
    </nav>
    <div class="asset-container">
        <!-- Header with Create Button -->
        <div class="header">
            <a class="btn-create" href="{{ url('/Ruang2/create') }}"><i class='bx bx-plus-circle'></i> Create</a>
        </div>

        <!-- Table -->
        <table id="assetTable" class="display">
            <thead>
                <tr>
                    @auth
                    <th>ACTIONS</th>
                    @endauth
                    <th>NO</th>
                    <th>Nama PC</th>
                    <th>Processor</th>
                    <th>RAM</th>
                    <th>VGA</th>
                    <th>Storage</th>
                    <th>Storage Type</th>
                    <th>Monitor</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>    
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        var table = $('#assetTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('assets.data2') }}", 
            columns: [
                @auth
                { data: 'action', name: 'action', orderable: false, searchable: false },
                @endauth
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'nama_pc', name: 'nama_pc' },
                { data: 'processor', name: 'processor' },
                { data: 'ram', name: 'ram' },
                { data: 'vga', name: 'vga' },
                { data: 'kapasitas_penyimpanan', name: 'kapasitas_penyimpanan' },
                { data: 'tipe_penyimpanan', name: 'tipe_penyimpanan' },
                { data: 'monitor', name: 'monitor' }
            ],
            language: {
                search: "",
                searchPlaceholder: "Search..."
            },
            dom: "<'row'<'col-sm-12'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12'l><'col-sm-12'p>>",
            info: false,
            pageLength: 5,
            lengthChange: false,
        });

        $(document).on('click', '.delete', function() {
            var assetId = $(this).data('id');
            var assetName = $(this).data('nama');

            // SweetAlert2 confirmation dialog
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "custom-confirm-button",
                    cancelButton: "custom-cancel-button"
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: "Apakah Anda Yakin?",
                text: assetName + " Tidak Dapat Dipulihkan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Tidak, Batal!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform the delete via AJAX
                    $.ajax({
                        url: '/Ruang2/delete/' + assetId,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                swalWithBootstrapButtons.fire({
                                    title: "Dihapus!",
                                    text: assetName + " Berhasil Dihapus",
                                    icon: "success"
                                });
                                table.ajax.reload();
                            }
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire({
                        title: "Batal",
                        text: assetName + " batal dihapus :)",
                        icon: "error"
                    });
                }
            });
        });
    });

</script> 
@endsection