@extends('layouts.app')
@section('title', 'Galih | Form Edit Data Contacts')
@section('content')
    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Form Edit</strong> Contact Us
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('contacts.update', $contact->id)}}" method="post" class="">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nama</label>
                                                <input type="text" id="nf-email" name="nama" placeholder="Masukkan Nama.." class="form-control"
                                                value="{{ $contact->nama }}">
                                                <span class="help-block">Silakan masukkan nama</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Email</label>
                                                <input type="email" id="nf-email" name="email" placeholder="Masukkan Email.." class="form-control"
                                                value="{{ $contact->email }}">
                                                <span class="help-block">Silakan masukkan email</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-password" class=" form-control-label">Pesan</label>
                                                <textarea name="pesan" placeholder="Masukkan Pesan.." class="form-control">
                                                    {{ $contact->pesan }}
                                                </textarea>
                                                <span class="help-block">Silakan masukkan pesan</span>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Ubah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection