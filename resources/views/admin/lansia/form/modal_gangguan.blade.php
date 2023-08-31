      <!--begin::Modal - New Target-->
      <div class="modal fade" id="gangguan" tabindex="-1" aria-hidden="true">
          <!--begin::Modal dialog-->
          <div class="modal-dialog modal-dialog-centered mw-650px">
              <!--begin::Modal content-->
              <div class="modal-content rounded">
                  <!--begin::Modal header-->
                  <div class="modal-header pb-0 border-0 justify-content-end">
                      <!--begin::Close-->
                      <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                          <span class="svg-icon svg-icon-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none">
                                  <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                      rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                  <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                      transform="rotate(45 7.41422 6)" fill="black" />
                              </svg>
                          </span>
                          <!--end::Svg Icon-->
                      </div>
                      <!--end::Close-->
                  </div>
                  <!--begin::Modal header-->
                  <!--begin::Modal body-->
                  <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                      <form id="kt_modal_new_target_form" class="form" action="{{ route('lansia.save.f') }}"
                          method="POST">
                          @csrf

                          <div class="mb-13 text-center">
                              <h1 class="mb-3">Pemeriksaan Fisik dan Tindakan</h1>
                          </div>
                          <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" id="user_id">
                          <input type="hidden" value="{{ $data->id }}" name="lansia_id" id="lansia_id">
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Tanggal Pemeriksaan</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="date" name="tanggal_p" @error('tanggal_p') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('tanggal_p')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <!--end::Input group-->
                          <div class="row g-9 mb-8">
                              <!--begin::Col-->
                              <div class="col-md-6 fv-row">
                                  <label class="required fs-6 fw-bold mb-2">Tinggi Badan</label>
                                  <input type="number" name="tinggi_badan" @error('tinggi_badan') is-invalid @enderror
                                      class="form-control form-control-solid" required />
                                  @error('tinggi_badan')
                                      <div class="invalid-feddback " role="alert">
                                          {{ $message }}
                                      </div>
                                  @enderror
                                  {{-- <select class="form-select form-select-solid" data-control="select2"
                                      data-hide-search="true" data-placeholder="Select a Team Member"
                                      name="target_assign">
                                      <option value="">Select user...</option>
                                      <option value="1">Karina Clark</option>
                                      <option value="2">Robert Doe</option>
                                      <option value="3">Niel Owen</option>
                                      <option value="4">Olivia Wild</option>
                                      <option value="5">Sean Bean</option>
                                  </select> --}}
                              </div>
                              <!--end::Col-->
                              <!--begin::Col-->
                              <div class="col-md-6 fv-row">
                                  <label class="required fs-6 fw-bold mb-2">Berat Badan</label>
                                  <input type="number" name="berat_badan" @error('berat_badan') is-invalid @enderror
                                      class="form-control form-control-solid" required />
                                  @error('berat_badan')
                                      <div class="invalid-feddback " role="alert">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <!--end::Col-->
                          </div>
                          <!--end::Input group-->
                          <!--end::Input group-->
                          <div class="row g-9 mb-8">
                              <!--begin::Col-->
                              <div class="col-md-6 fv-row">
                                  <label class="required fs-6 fw-bold mb-2">Sistole</label>
                                  <input type="number" name="sistole" @error('sistole') is-invalid @enderror
                                      class="form-control form-control-solid" required />
                                  @error('sistole')
                                      <div class="invalid-feddback " role="alert">
                                          {{ $message }}
                                      </div>
                                  @enderror
                                  {{-- <select class="form-select form-select-solid" data-control="select2"
                                      data-hide-search="true" data-placeholder="Select a Team Member"
                                      name="target_assign">
                                      <option value="">Select user...</option>
                                      <option value="1">Karina Clark</option>
                                      <option value="2">Robert Doe</option>
                                      <option value="3">Niel Owen</option>
                                      <option value="4">Olivia Wild</option>
                                      <option value="5">Sean Bean</option>
                                  </select> --}}
                              </div>
                              <!--end::Col-->
                              <!--begin::Col-->
                              <div class="col-md-6 fv-row">
                                  <label class="required fs-6 fw-bold mb-2">Diastole</label>
                                  <input type="number" name="diastole" @error('diastole') is-invalid @enderror
                                      class="form-control form-control-solid" required />
                                  @error('diastole')
                                      <div class="invalid-feddback " role="alert">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <!--end::Col-->
                          </div>
                          <!--end::Input group-->
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Tata Laksana</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="text" name="tata_laksana" @error('tata_laksana') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('tata_laksana')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <!--end::Input group-->
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Konseling</span>
                              </label>
                              <select class="form-select form-select-solid" data-control="select2"
                                  data-hide-search="true" data-placeholder="Select a Team Member" name="konseling"
                                  id="konseling">
                                  <option></option>
                                  <option value="Ya">Ya</option>
                                  <option value="Tidak">Tidak</option>
                              </select>
                          </div>
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Rujuk</span>
                              </label>
                              <select class="form-select form-select-solid" data-control="select2"
                                  data-hide-search="true" data-placeholder="Select a Team Member" name="rujuk"
                                  id="rujuk">
                                  <option></option>
                                  <option value="Ya">Ya</option>
                                  <option value="Tidak">Tidak</option>
                              </select>
                          </div>

                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Lain-lain</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="text" name="lain" @error('lain') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('lain')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="text-center">
                              <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3"
                                  data-bs-dismiss="modal">Cancel</button>
                              <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                  <span class="indicator-label">Submit</span>
                                  <span class="indicator-progress">Please wait...
                                      <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                              </button>
                          </div>
                          <!--end::Actions-->
                      </form>
                      <!--end:Form-->
                  </div>
                  <!--end::Modal body-->
              </div>
              <!--end::Modal content-->
          </div>
          <!--end::Modal dialog-->
      </div>
      <!--end::Modal - New Target-->


{{-- @foreach ( $data-> as  ) --}}
@foreach ($data->pemerisaan_fisik_tindakan as $key => $val)

          <!--begin::Modal - New Target-->
      <div class="modal fade" id="tindakanEdit{{ $val->id }}" tabindex="-1" aria-hidden="true">
          <!--begin::Modal dialog-->
          <div class="modal-dialog modal-dialog-centered mw-650px">
              <!--begin::Modal content-->
              <div class="modal-content rounded">
                  <!--begin::Modal header-->
                  <div class="modal-header pb-0 border-0 justify-content-end">
                      <!--begin::Close-->
                      <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                          <span class="svg-icon svg-icon-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none">
                                  <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                      rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                  <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                      transform="rotate(45 7.41422 6)" fill="black" />
                              </svg>
                          </span>
                          <!--end::Svg Icon-->
                      </div>
                      <!--end::Close-->
                  </div>
                  <!--begin::Modal header-->
                  <!--begin::Modal body-->
                  <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                      <form id="kt_modal_new_target_form" class="form" action="{{ route('lansia.save.f') }}"
                          method="POST">
                          @csrf

                          <div class="mb-13 text-center">
                              <h1 class="mb-3">Pemeriksaan Fisik dan Tindakan edit</h1>
                          </div>
                          <input type="hidden" value="{{ $val->id }}" name="id" id="id">
                          <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" id="user_id">
                          <input type="hidden" value="{{ $data->id }}" name="lansia_id" id="lansia_id">
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Tanggal Pemeriksaan</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="date" name="tanggal_p" @error('tanggal_p') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                                <div class="invalid-feddback " role="alert">
                                    <p>Terakhir pemeriksaan :
                                        {{ $FisikSelected != null ? $FisikSelected->tanggal_p->format('d M Y') : '' }} </p>
                                </div>
                              @error('tanggal_p')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <!--end::Input group-->
                          <div class="row g-9 mb-8">
                              <!--begin::Col-->
                              <div class="col-md-6 fv-row">
                                  <label class="required fs-6 fw-bold mb-2">Tinggi Badan</label>
                                  <input type="number" name="tinggi_badan" value="{{ $val->tinggi_badan }}"
                                      @error('tinggi_badan') is-invalid @enderror
                                      class="form-control form-control-solid" required />
                                  @error('tinggi_badan')
                                      <div class="invalid-feddback " role="alert">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <!--end::Col-->
                              <!--begin::Col-->
                              <div class="col-md-6 fv-row">
                                  <label class="required fs-6 fw-bold mb-2">Berat Badan</label>
                                  <input type="number" name="berat_badan" @error('berat_badan') is-invalid @enderror value="{{ $val->berat_badan }}"
                                      class="form-control form-control-solid" required />
                                  @error('berat_badan')
                                      <div class="invalid-feddback " role="alert">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <!--end::Col-->
                          </div>
                          <!--end::Input group-->
                          <!--end::Input group-->
                          <div class="row g-9 mb-8">
                              <!--begin::Col-->
                              <div class="col-md-6 fv-row">
                                  <label class="required fs-6 fw-bold mb-2">Sistole</label>
                                  <input type="number" name="sistole" @error('sistole') is-invalid @enderror value="{{ $val->sistole }}"
                                      class="form-control form-control-solid" required />
                                  @error('sistole')
                                      <div class="invalid-feddback " role="alert">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <!--end::Col-->
                              <!--begin::Col-->
                              <div class="col-md-6 fv-row">
                                  <label class="required fs-6 fw-bold mb-2">Diastole</label>
                                  <input type="number" name="diastole" @error('diastole') is-invalid @enderror value="{{ $val->diastole }}"
                                      class="form-control form-control-solid" required />
                                  @error('diastole')
                                      <div class="invalid-feddback " role="alert">
                                          {{ $message }}
                                      </div>
                                  @enderror
                              </div>
                              <!--end::Col-->
                          </div>
                          <!--end::Input group-->
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Tata Laksana</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="text" name="tata_laksana" @error('tata_laksana') is-invalid @enderror value="{{ $val->tata_laksana }}"
                                  class="form-control form-control-solid" required />
                              @error('tata_laksana')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <!--end::Input group-->
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Konseling</span>
                              </label>
                              <select class="form-select form-select-solid" data-control="select2"
                                  data-hide-search="true" data-placeholder="Select a Team Member" name="konseling"
                                  id="konseling">
                                  <option value="{{ $val->konseling }}">{{ $val->konseling }}</option>
                                  <option value="Ya">Ya</option>
                                  <option value="Tidak">Tidak</option>
                              </select>
                          </div>
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Rujuk</span>
                              </label>
                              <select class="form-select form-select-solid" data-control="select2"
                                  data-hide-search="true" data-placeholder="Select a Team Member" name="rujuk"
                                  id="rujuk">
                                  <option {{ $val->rujuk }}>{{ $val->rujuk }}</option>
                                  <option value="Ya">Ya</option>
                                  <option value="Tidak">Tidak</option>
                              </select>
                          </div>

                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Lain-lain</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="text" name="lain" @error('lain') is-invalid @enderror value="{{ $val->lain }}"
                                  class="form-control form-control-solid" required />
                              @error('lain')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="text-center">
                              <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3"
                                  data-bs-dismiss="modal">Cancel</button>
                              <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                  <span class="indicator-label">Submit</span>
                                  <span class="indicator-progress">Please wait...
                                      <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                              </button>
                          </div>
                          <!--end::Actions-->
                      </form>
                      <!--end:Form-->
                  </div>
                  <!--end::Modal body-->
              </div>
              <!--end::Modal content-->
          </div>
          <!--end::Modal dialog-->
      </div>
@endforeach

      <!--end::Modal - New Target-->
@foreach ($data->pemerisaan_fisik_tindakan as $key => $val)

          <!--begin::Modal - New Target-->
      <div class="modal fade" id="detailFisik{{ $val->id }}" tabindex="-1" aria-hidden="true">
          <!--begin::Modal dialog-->
          <div class="modal-dialog modal-dialog-centered mw-650px">
              <!--begin::Modal content-->
              <div class="modal-content rounded">
                  <!--begin::Modal header-->
                  <div class="modal-header pb-0 border-0 justify-content-end">
                      <!--begin::Close-->
                      <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                          <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                          <span class="svg-icon svg-icon-1">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none">
                                  <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                      rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                  <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                      transform="rotate(45 7.41422 6)" fill="black" />
                              </svg>
                          </span>
                          <!--end::Svg Icon-->
                      </div>
                      <!--end::Close-->
                  </div>
                  <!--begin::Modal header-->
                  <!--begin::Modal body-->
                  <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Berat Badan</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
													<span
															class="fw-bolder fs-6 text-gray-800">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->berat_badan : '-' }}
															Kg </span>
													{{-- <span --}}
													{{-- class="badge {{ $statusKoles == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusKoles != null ? $statusKoles : '' }}</span> --}}

											</div>
											<!--end::Col-->
									</div>
									<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Tinggi Badan</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_fisik_tindakan->last() != null ? $data->pemerisaan_fisik_tindakan->last()->tinggi_badan : '-' }}
															m </span>
													{{-- <span class="badge {{ $statusGula == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusGula != null ? $statusGula : '' }}</span> --}}
											</div>
											<!--end::Col-->
									</div>
									<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">IMT</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">

													<div class="col-lg-8 d-flex align-items-center">
															<span
																	class="fw-bolder fs-6 text-gray-800 me-2">{{ $val != null ? $val->imt : '-' }}
																	Kg/m^2 </span>
															<span
																	class="badge {{ $val->status_gizi == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $val->status_gizi != null ? $val->status_gizi : '' }}</span>

													</div>
											</div>
											<!--end::Col-->
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Tekanan Darah </label>
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $val != null ? $val->sistole : '-' }}
															/
															{{ $val != null ? $val->diastole : '-' }}
															mmHg </span>
													<span
															class="badge {{ $val->tekanan_darah == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $val->tekanan_darah != null ? $val->tekanan_darah : '' }}</span>
											</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Konseling </label>
											<div class="col-lg-8 fv-row">
												<span class="fw-bold text-gray-800 fs-6">{{ $val->konseling != null ? $val->konseling : '-' }}</span>
										</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Rujuk </label>
											<div class="col-lg-8 fv-row">
												<span class="fw-bold text-gray-800 fs-6">{{ $val->rujuk != null ? $val->rujuk : '-' }}</span>
										</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Tata Laksana </label>
											<div class="col-lg-8 fv-row">
												<span class="fw-bold text-gray-800 fs-6">{{ $val->tata_laksana != null ? $val->tata_laksana : '-' }}</span>
										</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Lain-lain </label>
											<div class="col-lg-8 fv-row">
												<span class="fw-bold text-gray-800 fs-6">{{ $val->lain != null ? $val->lain : '-' }}</span>
										</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Terakhir Pemeriksaaan</label>
											<div class="col-lg-8 fv-row">
													<span class="fw-bold text-gray-800 fs-6">{{ $val->tanggal_p != null ? $val->tanggal_p->translatedFormat('d M Y, h:i A') : '-' }}</span>
											</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Diperiksa Oleh</label>
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $val->user->name != null ? $val->user->name : '-' }}</span>
											</div>
									</div>
                      <!--end:Form-->
                  </div>
                  <!--end::Modal body-->
              </div>
              <!--end::Modal content-->
          </div>
          <!--end::Modal dialog-->
      </div>
@endforeach

      <!--end::Modal - New Target-->

