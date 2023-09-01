      <!--begin::Modal - New Target-->
      <div class="modal fade" id="lab" tabindex="-1" aria-hidden="true">
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
                      <form id="kt_modal_new_target_form" class="form" action="{{ route('lansia.save.lab') }}"
                          method="POST">
                          @csrf
                          <div class="mb-13 text-center">
                              <h1 class="mb-3">Laboratorium</h1>
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
                              <input type="date" name="tanggal_p_lab" @error('tanggal_p_lab') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('tanggal_p_lab')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Kolesterol</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="number" name="kolesterol" @error('kolesterol') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('kolesterol')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Gula Darah</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="text" name="gula_darah" @error('gula_darah') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('gula_darah')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Asam Urat</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="text" name="asam_urat" @error('asam_urat') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('asam_urat')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Hemoglobin</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="text" name="hb" @error('hb') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('hb')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <!--end::Input group-->
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
@foreach ($data->pemerisaan_lab as $key => $val)

          <!--begin::Modal - New Target-->
      <div class="modal fade" id="LabEdit{{ $val->id }}" tabindex="-1" aria-hidden="true">
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
                      <form id="kt_modal_new_target_form" class="form" action="{{ route('lansia.save.lab') }}"
                          method="POST">
                          @csrf

                          <div class="mb-13 text-center">
                              <h1 class="mb-3">Laboratorium Edit</h1>
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
                              <input type="date" name="tanggal_p_lab" @error('tanggal_p_lab') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                                <div class="invalid-feddback " role="alert">
                                    <p>Terakhir pemeriksaan :
                                        {{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->tanggal_p_lab->format('d M Y') : '' }} </p>
                                </div>
                              @error('tanggal_p_lab')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <!--end::Input group-->
                          <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Kolesterol</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>
                            <!--end::Label-->
                            <input type="number" name="kolesterol" @error('kolesterol') is-invalid @enderror value="{{ $val->kolesterol }}"
                                class="form-control form-control-solid" required />
                            @error('kolesterol')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Gula Darah</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>
                            <!--end::Label-->
                            <input type="text" name="gula_darah" @error('gula_darah') is-invalid @enderror value="{{ $val->gula_darah }}"
                                class="form-control form-control-solid" required />
                            @error('gula_darah')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Asam Urat</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>
                            <!--end::Label-->
                            <input type="text" name="asam_urat" @error('asam_urat') is-invalid @enderror value="{{ $val->asam_urat }}"
                                class="form-control form-control-solid" required />
                            @error('asam_urat')
                                <div class="invalid-feddback " role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Hemoglobin</span>
                                {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                            </label>
                            <!--end::Label-->
                            <input type="text" name="hb" @error('hb') is-invalid @enderror  value="{{ $val->hb }}"
                                class="form-control form-control-solid" required />
                            @error('hb')
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
@foreach ($data->pemerisaan_lab as $key => $val)

          <!--begin::Modal - New Target-->
      <div class="modal fade" id="detailLab{{ $val->id }}" tabindex="-1" aria-hidden="true">
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
                        <label class="col-lg-4 fw-bold text-muted">Kolesterol</label>
                        <div class="col-lg-8">
                            <span
                                class="fw-bolder fs-6 text-gray-800">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->kolesterol : '-' }}
                                mg / dl </span>
                            <span
                                class="badge {{ $statusKoles == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusKoles != null ? $statusKoles : '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-bold text-muted">Gula Darah</label>
                        <div class="col-lg-8 fv-row">
                            <span
                                class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->gula_darah : '-' }}
                                mg / dl </span>
                            <span
                                class="badge {{ $statusGula == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusGula != null ? $statusGula : '' }}</span>
                        </div>
                    </div>
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-bold text-muted">Asam Urat</label>
                        <div class="col-lg-8 fv-row">
                            <div class="col-lg-8 d-flex align-items-center">
                                <span
                                    class="fw-bolder fs-6 text-gray-800 me-2">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->asam_urat : '-' }}
                                    mg / dl </span>
                                <span
                                    class="badge {{ $statusAsamUrat == 'Tinggi' ? 'badge-danger' : 'badge-success ' }}">{{ $statusAsamUrat != null ? $statusAsamUrat : '' }}</span>
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-bold text-muted">Hemoglobin</label>
                        <div class="col-lg-8 fv-row">
                            <span
                                class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->hb : '-' }}
                                mg / dl </span>
                            <span
                                class="badge {{ $statusHb == 'Anemia' ? 'badge-danger' : 'badge-success ' }}">{{ $statusHb != null ? $statusHb : '' }}</span>

                        </div>
                    </div>
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-bold text-muted">Terakhir Pemeriksaaan</label>
                        <div class="col-lg-8 fv-row">
                            <span
                                class="fw-bold text-gray-800 fs-6">{{ $data->pemerisaan_lab->last() != null ? $data->pemerisaan_lab->last()->tanggal_p_lab->translatedFormat('d M Y, h:i A') : '-' }}</span>
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

