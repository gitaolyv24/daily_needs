@extends('layouts.app')

@section('title', 'Daftar Kebutuhan')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>
    body { background-color: #f0f2f5; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
    .main-container { max-width: 900px; margin-top: 50px; }
    
    /* Header Style */
    .header-title { color: #1a2a6c; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; }
    .header-line { width: 50px; height: 5px; background: #b21f1f; margin: 10px auto 30px; border-radius: 10px; }

    /* Card Customization */
    .card-custom { border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; }
    .card-header-gradient {
        background: linear-gradient(90deg, #1a2a6c, #b21f1f, #fdbb2d);
        padding: 25px; color: white; border: none;
    }

    /* Form & Input */
    .form-label { font-weight: 600; color: #4a4a4a; font-size: 0.9rem; }
    .form-control-custom { 
        background-color: #f8f9fa; border: 2px solid #eee; border-radius: 12px; padding: 12px; transition: 0.3s;
    }
    .form-control-custom:focus { background-color: #fff; border-color: #1a2a6c; box-shadow: none; }
    
    /* Button */
    .btn-submit { 
        background: #1a2a6c; border: none; border-radius: 12px; padding: 12px; 
        font-weight: 600; transition: 0.3s; color: white;
    }
    .btn-submit:hover { background: #b21f1f; transform: translateY(-3px); color: white; }

    /* List Style */
    .need-item { 
        border: 1px solid #f0f0f0; border-radius: 15px; margin-bottom: 12px; 
        padding: 15px; transition: 0.3s; background: white;
    }
    .need-item:hover { transform: scale(1.01); box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
</style>

<div class="container main-container">
    <div class="text-center">
        <h1 class="header-title">Daftar Kebutuhan</h1>
        <div class="header-line"></div>
    </div>

    <div class="card card-custom mb-5">
        <div class="card-header-gradient">
            <h5 class="mb-0"><i class="bi bi-plus-circle-fill me-2"></i> Tambah Kebutuhan Baru</h5>
        </div>
        <div class="card-body p-4">
            <form action="/needs" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label">Nama Barang</label>
                        <input type="text" name="item_name" class="form-control form-control-custom" placeholder="Misal: Beras Cianjur" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Jumlah</label>
                        <input type="number" name="quantity" class="form-control form-control-custom" placeholder="0" min="1" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Prioritas</label>
                        <select name="priority" class="form-select form-control-custom">
                            <option value="high">🔴 Tinggi</option>
                            <option value="medium" selected>🟠 Sedang</option>
                            <option value="low">🟢 Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Tanggal Dibutuhkan</label>
                        <input type="date" name="need_date" class="form-control form-control-custom" required value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="col-md-4 mb-3 d-grid">
                        <label class="form-label d-none d-md-block">&nbsp;</label>
                        <button type="submit" class="btn btn-submit">
                            Simpan Data <i class="bi bi-arrow-right-short"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card card-custom p-4">
        <h5 class="fw-bold mb-4 text-secondary"><i class="bi bi-collection-fill me-2"></i> Item Belanjaan</h5>
        
        <div class="needs-list">
            @forelse ($needs as $need)
                <div class="need-item d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex align-items-center">
                        <div class="priority-indicator me-3" style="width: 5px; height: 40px; border-radius: 5px; background: {{ $need->priority == 'high' ? '#dc3545' : ($need->priority == 'medium' ? '#ffc107' : '#198754') }}"></div>
                        <div>
                            <h6 class="mb-0 fw-bold">{{ $need->item_name }} ({{ $need->quantity }})</h6>
                            <small class="text-muted small">Target: {{ \Carbon\Carbon::parse($need->need_date)->format('d M Y') }}</small>
                        </div>
                    </div>

                    <div class="d-flex gap-2 mt-3 mt-sm-0">
                        @if ($need->status == 'not_bought')
                            <form action="/needs/{{ $need->id }}" method="POST">
                                @csrf @method('PUT')
                                <button class="btn btn-sm btn-outline-success rounded-pill px-3">Sudah Dibeli</button>
                            </form>
                        @else
                            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2">Selesai</span>
                        @endif

                        <form action="/needs/{{ $need->id }}" method="POST" onsubmit="return confirm('Hapus data?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-light text-danger rounded-pill px-3">Hapus</button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="text-center py-5">
                    <i class="bi bi-cart-x text-muted" style="font-size: 3rem;"></i>
                    <p class="text-muted mt-2">Daftar masih kosong.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection