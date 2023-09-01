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
                      <form id="kt_modal_new_target_form" class="form" action="{{ route('lansia.save.g') }}"
                          method="POST">
                          @csrf
                          <div class="mb-13 text-center">
                              <h1 class="mb-3">Riwayat Gangguan</h1>
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
                              <input type="date" name="tanggal_p_g" @error('tanggal_p_g') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('tanggal_p_g')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
													<div class="d-flex flex-column mb-8 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
															<span class="required">Gangguan Ginjal</span>
													</label>
													<select class="form-select form-select-solid" data-control="select2"
															data-hide-search="true" data-placeholder="Select a Team Member" name="g_ginjal"
															id="g_ginjal">
															<option></option>
															<option value="Ya">Ya</option>
															<option value="Tidak">Tidak</option>
													</select>
													</div>
													<div class="d-flex flex-column mb-8 fv-row">
													<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																	<span class="required">Gangguan Pengelihatan</span>
															</label>
															<select class="form-select form-select-solid" data-control="select2"
																	data-hide-search="true" data-placeholder="Select a Team Member" name="g_pengelihatan"
																	id="g_pengelihatan">
																	<option></option>
																	<option value="Ya">Ya</option>
																	<option value="Tidak">Tidak</option>
															</select>
													</div>
													<div class="d-flex flex-column mb-8 fv-row">
													<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																	<span class="required">Gangguan Pendengaran</span>
															</label>
															<select class="form-select form-select-solid" data-control="select2"
																	data-hide-search="true" data-placeholder="Select a Team Member" name="g_pendengaran"
																	id="g_pendengaran">
																	<option></option>
																	<option value="Ya">Ya</option>
																	<option value="Tidak">Tidak</option>
															</select>
													</div>
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Penyuluhan</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="text" name="penyuluhan" @error('penyuluhan') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('penyuluhan')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Pemberdayaan</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="text" name="pemberdayaan" @error('pemberdayaan') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('pemberdayaan')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <!--end::Input group-->
													<!--begin::Input group-->
													<div class="d-flex flex-column mb-8">
														<label class="fs-6 fw-bold mb-2">Keterangan</label>
														<textarea class="form-control form-control-solid" rows="3" name="keterangan" placeholder="Keterangan"></textarea>
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
@foreach ($data->riwayat_gangguan as $key => $val)

          <!--begin::Modal - New Target-->
      <div class="modal fade" id="GangguanEdit{{ $val->id }}" tabindex="-1" aria-hidden="true">
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
                      <form id="kt_modal_new_target_form" class="form" action="{{ route('lansia.save.g') }}"
                          method="POST">
                          @csrf

                          <div class="mb-13 text-center">
                              <h1 class="mb-3">Riwayat Gangguan Edit</h1>
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
                              <input type="date" name="tanggal_p_g" @error('tanggal_p_g') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                                <div class="invalid-feddback " role="alert">
                                    <p>Terakhir pemeriksaan :
                                        {{ $data->riwayat_gangguan->last() != null ? $data->riwayat_gangguan->last()->tanggal_p_g->format('d M Y') : '' }} </p>
                                </div>
                              @error('tanggal_p_g')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <!--end::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Gangguan Ginjal</span>
												</label>
												<select class="form-select form-select-solid" data-control="select2"
														data-hide-search="true" data-placeholder="Select a Team Member" name="g_ginjal"
														id="g_ginjal">
														<option value="{{ $val->g_ginjal }}">{{ $val->g_ginjal }}</option>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
												</select>
												</div>
												<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																<span class="required">Gangguan Pengelihatan</span>
														</label>
														<select class="form-select form-select-solid" data-control="select2"
																data-hide-search="true" data-placeholder="Select a Team Member" name="g_pengelihatan"
																id="g_pengelihatan">
																<option value="{{ $val->g_pengelihatan }}">{{ $val->g_pengelihatan }}</option>
																<option value="Ya">Ya</option>
																<option value="Tidak">Tidak</option>
														</select>
												</div>
												<div class="d-flex flex-column mb-8 fv-row">
												<!--begin::Label-->
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																<span class="required">Gangguan Pendengaran</span>
														</label>
														<select class="form-select form-select-solid" data-control="select2"
																data-hide-search="true" data-placeholder="Select a Team Member" name="g_pendengaran"
																id="g_pendengaran">
																<option value="{{ $val->g_pendengaran }}">{{ $val->g_pendengaran }}</option>
																<option value="Ya">Ya</option>
																<option value="Tidak">Tidak</option>
														</select>
												</div>
												<div class="d-flex flex-column mb-8 fv-row">
														<!--begin::Label-->
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																<span class="required">Penyuluhan</span>
																{{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
														</label>
														<!--end::Label-->
														<input type="text" name="penyuluhan" @error('penyuluhan') is-invalid @enderror value="{{ $val->penyuluhan }}"
																class="form-control form-control-solid" required />
														@error('penyuluhan')
																<div class="invalid-feddback " role="alert">
																		{{ $message }}
																</div>
														@enderror
												</div>
												<div class="d-flex flex-column mb-8 fv-row">
														<!--begin::Label-->
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																<span class="required">Pemberdayaan</span>
																{{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
														</label>
														<!--end::Label-->
														<input type="text" name="pemberdayaan" @error('pemberdayaan') is-invalid @enderror value="{{ $val->penyuluhan }}"
																class="form-control form-control-solid" required />
														@error('pemberdayaan')
																<div class="invalid-feddback " role="alert">
																		{{ $message }}
																</div>
														@enderror
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="d-flex flex-column mb-8">
													<label class="fs-6 fw-bold mb-2">Keterangan</label>
													<textarea class="form-control form-control-solid" rows="3" name="keterangan" placeholder="Keterangan">{{ $val->keterangan }}</textarea>
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
@foreach ($data->riwayat_gangguan as $key => $val)

          <!--begin::Modal - New Target-->
      <div class="modal fade" id="detailGangguan{{ $val->id }}" tabindex="-1" aria-hidden="true">
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
											<label class="col-lg-4 fw-bold text-muted">Gangguan Ginjal</label>
											<div class="col-lg-8">
													<span
															class="fw-bolder fs-6 text-gray-800">{{ $val != null ? $val->g_ginjal : '-' }}</span>
											</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Gangguan Penglihatan</label>
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $val != null ? $val->g_pengelihatan : '-' }}</span>
											</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Gangguan Pendengaran</label>
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $val != null ? $val->g_pendengaran : '-' }}</span>
											</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Penyuluhan</label>
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $val != null ? $val->penyuluhan : '-' }}</span>
											</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Pemberdayaan</label>
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $val != null ? $val->pemberdayaan : '-' }}</span>
											</div>
									</div>
									<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Keterangan</label>
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $val != null ? $val->keterangan : '-' }}</span>
											</div>
									</div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-bold text-muted">Terakhir Pemeriksaaan</label>
                                        <div class="col-lg-8 fv-row">
                                                <span class="fw-bold text-gray-800 fs-6">{{ $val->tanggal_p_g != null ? $val->tanggal_p_g->translatedFormat('d M Y, h:i A') : '-' }}</span>
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

