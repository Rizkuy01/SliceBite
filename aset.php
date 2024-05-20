<!-- checkout v.mako -->

<section class="main-content">
            <div class="checkout-area pt-55 pb-100">
    <div class="container">
        
        
        <form action="https://shop.mako.id/checkout/order_rv_f" method="POST" id="checkout_form" data-gtm-form-interact-id="0">
                        <div class="row">
                <div class="col-lg-7 col-md-7 c-left-area">
                    <div class="billing-info-wrap">
                        <div class="billing-info-header">
                            <label for="pemesan">Informasi Pemesan</label>
                        </div>
                                                <div class="billing-info-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Nama Pemesan</label>
                                        <input type="hidden" name="od_ttl" value="17500">
                                        <input type="text" class="ps_field ch_field" name="od_psname" col="name" value="">
                                        <div class="invalid-feedback">
                                            Masukkan nama pemesan
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Email <span style="color:#EB385A;">*</span></label>
                                        <input type="text" name="od_psemladd" class="ps_field ch_field input-mail" col="emladd" value="">
                                        <div class="invalid-feedback">
                                            Isi alamat email
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Nomor HP / Telpon</label>
                                        <input type="text" class="ps_field ch_field input-number" col="phone" name="od_psphone" pattern="[0-9]*" value="">
                                        <div class="invalid-feedback">
                                            Isi dengan nomor HP/telpon yang mudah dihubungi
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Nomor HP / Telpon 2 ( optional )</label>
                                        <input type="text" name="od_psphone_2" pattern="[0-9]*" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <span style="color:#EB385A;">* Notifikasi pesanan akan dikirim melalui email</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="billing-info-wrap billing-shipment mt-20">
                        <div class="billing-info-header">
                            <label for="pengiriman">Informasi Pengiriman</label>
                        </div>
                        <div class="billing-info-body">
                            <div class="row mb-3">
                                <div class="col-lg-12 col-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input od_smodps" type="radio" name="od_fty" id="ch_smodps1" value="od_fty1" checked="">
                                        <label class="form-check-label" for="ch_smodps1">Kirim ke pemesan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input od_smodps" type="radio" name="od_fty" id="ch_smodps2" value="od_fty2">
                                        <label class="form-check-label" for="ch_smodps2">Kirim ke alamat lain</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row pn-form d-none">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Nama Penerima</label>
                                        <input type="text" class="" name="od_pnname" col="name" value="">
                                        <div class="invalid-feedback">
                                            Masukkan nama penerima
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Nomor HP / Telpon</label>
                                        <input type="text" class="input-number" name="od_pnphone" col="phone" pattern="[0-9]*" value="">
                                        <div class="invalid-feedback">
                                            Isi dengan nomor HP/telpon yang mudah dihubungi
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                            <div class="row mb-2">
                                    <div class="col-lg-12 col-12">
                                        <div class="billing-info">
                                            <label>Waktu Pengiriman</label>
                                            <input type="text" class="ps_field ch_field dpicker hasDatepicker" name="od_dtime" value="15-05-2024" readonly="" id="dp1715773375768">
                                            <div class="invalid-feedback">
                                                Masukkan nama pemesan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <input type="hidden" name="od_cor" value="">
                                        <label>Alamat Pengiriman</label>
                                        <p class="p-0 m-0">Klik tombol dibawah ini untuk menentukan lokasi tujuan pengiriman</p>
                                        <div class="row m-0 ">
                                            <div class="col-12 col-md-6 mb-10 p-0">
                                                <button type="button" href="#" class="btn-change-location btn-mako btn-mako2" id="load_location" data-type="l_md"> &nbsp; <i class="fa fa-map-marker text-danger"></i> Pilih Lokasi Tujuan &nbsp; </button>
                                            </div>
                                            <div class="col-12 col-md-6 p-0 text-md-right m-auto">
                                                <span class="text-danger">( Otomatis dari maps )</span>
                                            </div>
                                        </div>
                                        <div class="billing-row-adds">
                                            <textarea name="od_addrs" readonly="true" class="ch_field ch_address border-0 pb-0"></textarea>
                                            <input type="text" name="od_city" class="ronly-0 border-0" value="Karawang" readonly="true">
                                            <input type="text" name="od_pscd" class="ronly-0 input-number border-0" value="" readonly="true">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="billing-info mb-20">
                                        <label>Detail Alamat Pengiriman</label>
                                        <textarea name="od_ext_notes" rows="3" placeholder="Isi dengan detail tambahan seperti nomor rumah, blok, nama gedung, nama gang, penanda jalan, dan petunjuk lebih rinci lainnya."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 mt-10">
                    <div class="your-order-area">
                        <div class="your-order-header">
                            <label for="ringkasan Pesanan">Ringkasan Pesanan</label>
                        </div>
                        <div class="your-order-wrap">
                            <div class="your-order-product-info">
                                <table class="table table-checkout m-0">
                                    <tbody><tr><td>1x</td><td>Rendang Floss<ul></ul></td><td>12.500</td></tr><tr><td colspan="2">Total Harga</td><td>12.500</td></tr><tr><td colspan="2">Eco Bag</td><td>5.000</td></tr><tr><td colspan="2" class="od_g">Biaya Kirim</td><td class="od_g">0 <input name="od_delvfee" type="hidden" value="0"></td></tr></tbody>
                                </table>
                                <div class="your-order-total">
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <strong>Total Bayar </strong>
                                        </div>
                                        <div class="col-6 order-total text-end" style="text-align: right;">
                                            <strong>Rp. 17.500</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="your-order-area mt-20">
                        <div class="your-order-header">
                            <label for="Notes Belanja">Catatan</label>
                        </div>
                        <div class="your-order-wrap" style="padding: 10px;">
                            <textarea name="od_note" class="" rows="3" placeholder="Tulis catatan pesanan disini."></textarea>
                        </div>
                    </div>
                                            <div class="your-order-payment mt-20">
                            <div class="op-l" style="display: none;"></div>
                            <div class="order-payment-content">
                                <div class="order-payment-header">
                                    <label> <i class="pe-7s-cash"></i> Pilih Metode Pembayaran</label>
                                </div>
                                <div class="payment-method">

                                                                                    <div class="rb-payment col-12 credit_cards">
                                                    <label class="payment-label" for="pm-credit_cards">
                                                        <div class="payment-m-img">
                                                            <img src="https://cdn.mako.id/payment/card.png" alt="card.png">
                                                        </div>
                                                        <div class="rb-payment-title">
                                                            Credit/Debit Card (Visa/Master)                                                        </div>
                                                        <input type="radio" name="od_payment" id="pm-credit_cards" value="credit_cards" class="rb-payment-input" checked="">
                                                        <div class="rb-payment-csin"></div>
                                                    </label>
                                                </div>
                                                                                    <div class="rb-payment col-12 bca_va">
                                                    <label class="payment-label" for="pm-bca_va">
                                                        <div class="payment-m-img">
                                                            <img src="https://cdn.mako.id/payment/bca.png" alt="bca.png">
                                                        </div>
                                                        <div class="rb-payment-title">
                                                            BCA Virtual Account                                                        </div>
                                                        <input type="radio" name="od_payment" id="pm-bca_va" value="bca_va" class="rb-payment-input" data-gtm-form-interact-field-id="0">
                                                        <div class="rb-payment-csin"></div>
                                                    </label>
                                                </div>
                                                                                    <div class="rb-payment col-12 echannel">
                                                    <label class="payment-label" for="pm-echannel">
                                                        <div class="payment-m-img">
                                                            <img src="https://cdn.mako.id/payment/mandiri.png" alt="mandiri.png">
                                                        </div>
                                                        <div class="rb-payment-title">
                                                            Mandiri Bill Payment                                                        </div>
                                                        <input type="radio" name="od_payment" id="pm-echannel" value="echannel" class="rb-payment-input">
                                                        <div class="rb-payment-csin"></div>
                                                    </label>
                                                </div>
                                                                                    <div class="rb-payment col-12 cimb_clicks">
                                                    <label class="payment-label" for="pm-cimb_clicks">
                                                        <div class="payment-m-img">
                                                            <img src="https://cdn.mako.id/payment/octo_clicks.png" alt="octo_clicks.png">
                                                        </div>
                                                        <div class="rb-payment-title">
                                                            Octoclicks (CIMB Clicks)                                                        </div>
                                                        <input type="radio" name="od_payment" id="pm-cimb_clicks" value="cimb_clicks" class="rb-payment-input">
                                                        <div class="rb-payment-csin"></div>
                                                    </label>
                                                </div>
                                                                                    <div class="rb-payment col-12 gopay ac">
                                                    <label class="payment-label" for="pm-gopay">
                                                        <div class="payment-m-img">
                                                            <img src="https://cdn.mako.id/payment/gopay.png" alt="gopay.png">
                                                        </div>
                                                        <div class="rb-payment-title">
                                                            Gopay                                                        </div>
                                                        <input type="radio" name="od_payment" id="pm-gopay" value="gopay" class="rb-payment-input" data-gtm-form-interact-field-id="1">
                                                        <div class="rb-payment-csin"></div>
                                                    </label>
                                                </div>
                                                                                    <div class="rb-payment col-12 ovo">
                                                    <label class="payment-label" for="pm-ovo">
                                                        <div class="payment-m-img">
                                                            <img src="https://cdn.mako.id/payment/qris.png" alt="qris.png">
                                                        </div>
                                                        <div class="rb-payment-title">
                                                            QRIS&nbsp;<small style="color:#6c757d">(Gopay, Ovo, Dana, ShopeePay , QRIS bank lainnya)</small>                                                        </div>
                                                        <input type="radio" name="od_payment" id="pm-ovo" value="ovo" class="rb-payment-input">
                                                        <div class="rb-payment-csin"></div>
                                                    </label>
                                                </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="order-vocher">
                            <div class="order-vocher-title">
                                <svg enable-background="new 0 0 475.293 475.293" height="24" viewBox="0 0 475.293 475.293" width="24" style="fill:currentColor;margin-right: 8px">
                                    <path d="m430.734 415.882h-386.175c-24.571 0-44.559-19.988-44.559-44.559v-74.265c0-8.21 6.643-14.853 14.853-14.853 24.571 0 44.559-19.988 44.559-44.559s-19.988-44.559-44.559-44.559c-8.21.001-14.853-6.642-14.853-14.852v-74.265c0-24.571 19.988-44.559 44.559-44.559h386.176c24.571 0 44.559 19.988 44.559 44.559v74.265c0 8.21-6.643 14.853-14.853 14.853-24.571 0-44.559 19.988-44.559 44.559s19.988 44.559 44.559 44.559c8.21 0 14.853 6.643 14.853 14.853v74.265c-.001 24.57-19.988 44.558-44.56 44.558zm-401.028-105.465v60.906c0 8.195 6.658 14.853 14.853 14.853h386.176c8.195 0 14.853-6.658 14.853-14.853v-60.906c-33.854-6.904-59.412-36.9-59.412-72.771s25.557-65.866 59.412-72.771v-60.905c0-8.195-6.658-14.853-14.853-14.853h-386.176c-8.195 0-14.853 6.658-14.853 14.853v60.906c33.854 6.904 59.412 36.9 59.412 72.771s-25.558 65.866-59.412 72.77z"></path>
                                    <path d="m-253.192 288.847h253.806v29.716h-253.806z" transform="matrix(.351 -.936 .936 .351 -2.301 12.678)"></path>
                                    <path id="path-1_20_" d="m163.382 237.647c-24.571 0-44.559-19.988-44.559-44.559s19.988-44.559 44.559-44.559 44.559 19.988 44.559 44.559-19.988 44.559-44.559 44.559zm0-59.412c-8.195 0-14.853 6.658-14.853 14.853s6.658 14.853 14.853 14.853 14.853-6.658 14.853-14.853-6.658-14.853-14.853-14.853z" transform="translate(4 5)"></path>
                                    <path id="path-1_19_" d="m311.911 326.764c-24.571 0-44.559-19.988-44.559-44.559s19.988-44.559 44.559-44.559 44.559 19.988 44.559 44.559-19.988 44.559-44.559 44.559zm0-59.412c-8.195 0-14.853 6.658-14.853 14.853s6.658 14.853 14.853 14.853 14.853-6.658 14.853-14.853-6.658-14.853-14.853-14.853z" transform="translate(9 8)"></path>
                                </svg>
                                Kupon Promo
                            </div>
                            <div class="order-vocher-body">
                                <div class="order-vocher-act"><input type="hidden" name="od_vocher"><span> Pilih Kupon</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path></svg></div>
                            </div>
                        </div>

                        <div class="order-submit mt-20">
                            <a class="btn-hover" href="#" id="order_checkout">Bayar</a>
                        </div>
                    
                </div>
            </div>
        </form>
    </div>
</div>        </section>