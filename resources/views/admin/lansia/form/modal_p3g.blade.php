      <!--begin::Modal - New Target-->
      <div class="modal fade" id="p3g" tabindex="-1" aria-hidden="true">
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
                      <form id="kt_modal_new_target_form" class="form" action="{{ route('lansia.save.p3g') }}"
                          method="POST">
                          @csrf
                          <div class="mb-13 text-center">
                              <h1 class="mb-3">P3G</h1>
                          </div>
                          <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" id="user_id">
                          <input type="hidden" value="{{ $data->id }}" name="lansia_id" id="lansia_id">
                          <input type="hidden" value="{{ $data->desa_id }}" name="desa_id" id="desa_id">
                          <div class="d-flex flex-column mb-8 fv-row">
                              <!--begin::Label-->
                              <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                  <span class="required">Tanggal Pemeriksaan</span>
                                  {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
                              </label>
                              <!--end::Label-->
                              <input type="date" name="tanggal_p_p3g" @error('tanggal_p_p3g') is-invalid @enderror
                                  class="form-control form-control-solid" required />
                              @error('tanggal_p_p3g')
                                  <div class="invalid-feddback " role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                          <!--end::Input group-->
													<div class="d-flex flex-column mb-8 fv-row">
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
															<span class="required">Tingkat Kemandirian</span>
														</label>
														<select class="form-select form-select-solid" data-control="select2"
															data-hide-search="true" data-placeholder="Select a Team Member" name="tingkat_kemandirian"
															id="tingkat_kemandirian">
															<option></option>
															<option value='A'>A</option>
															<option value='B'>B</option>
															<option value='C'>C</option>
														</select>
													</div>
                          <!--end::Input group-->
                          <!--end::Input group-->
													<div class="d-flex flex-column mb-8 fv-row">
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
															<span class="required">Gangguan Emosional</span>
														</label>
														<select class="form-select form-select-solid" data-control="select2"
															data-hide-search="true" data-placeholder="Select a Team Member" name="g_emosional"
															id="g_emosional">
															<option></option>
															<option value="Ya">Ya</option>
															<option value="Tidak">Tidak</option>
														</select>
													</div>
														<!--end::Input group-->
														<!--end::Input group-->
													<div class="d-flex flex-column mb-8 fv-row">
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
															<span class="required">Gangguan Kognitiv</span>
														</label>
														<select class="form-select form-select-solid" data-control="select2"
															data-hide-search="true" data-placeholder="Select a Team Member" name="g_kognitiv"
															id="g_kognitiv">
															<option></option>
															<option value="Ya">Ya</option>
															<option value="Tidak">Tidak</option>
														</select>
													</div>
                          <!--end::Input group-->
                          <!--end::Input group-->
													<div class="d-flex flex-column mb-8 fv-row">
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
															<span class="required">Penilaian Resiko Malnutrisi</span>
														</label>
														<select class="form-select form-select-solid" data-control="select2"
															data-hide-search="true" data-placeholder="Select a Team Member" name="p_resiko_malnutrisi"
															id="p_resiko_malnutrisi">
															<option></option>
															<option value='Normal'>Normal</option>
															<option value='Resiko Malnutrisi'>Resiko Malnutrisi</option>
															<option value='Malnutrisi'>Malnutrisi</option>
														</select>
													</div>
                          <!--end::Input group-->
													<!--end::Input group-->
													<div class="d-flex flex-column mb-8 fv-row">
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
															<span class="required">Resiko Jatuh</span>
														</label>
														<select class="form-select form-select-solid" data-control="select2"
															data-hide-search="true" data-placeholder="Select a Team Member" name="p_resiko_jatuh"
															id="p_resiko_jatuh">
															<option></option>
															<option value="Ya">Ya</option>
															<option value="Tidak">Tidak</option>
														</select>
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
@foreach ($data->p3g as $key => $val)
          <!--begin::Modal - New Target-->
      <div class="modal fade" id="p3gEdit{{ $val->id }}" tabindex="-1" aria-hidden="true">
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
                      <form id="kt_modal_new_target_form" class="form" action="{{ route('lansia.save.p3g') }}"
                          method="POST">
                          @csrf

                          <div class="mb-13 text-center">
                              <h1 class="mb-3">P3G Edit</h1>
                          </div>
                          <input type="hidden" value="{{ $val->id }}" name="id" id="id">
                          <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" id="user_id">
                          <input type="hidden" value="{{ $data->id }}" name="lansia_id" id="lansia_id">
                          <input type="hidden" value="{{ $data->desa_id }}" name="desa_id" id="desa_id">

                          <div class="d-flex flex-column mb-8 fv-row">
														<!--begin::Label-->
														<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																<span class="required">Tanggal Pemeriksaan</span>
																{{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i> --}}
														</label>
														<!--end::Label-->
														<input type="date" name="tanggal_p_p3g" @error('tanggal_p_p3g') is-invalid @enderror
																class="form-control form-control-solid" required />
															<div class="invalid-feddback " role="alert">
																	<p>Terakhir pemeriksaan :
																			{{ $data->p3g->last() != null ? $data->p3g->last()->tanggal_p_p3g->format('d M Y') : '' }} </p>
															</div>
														@error('tanggal_p_p3g')
																<div class="invalid-feddback " role="alert">
																		{{ $message }}
																</div>
														@enderror
												</div>
												<!--end::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Tingkat Kemandirian</span>
													</label>
													<select class="form-select form-select-solid" data-control="select2"
														data-hide-search="true" data-placeholder="Select a Team Member" name="tingkat_kemandirian"
														id="tingkat_kemandirian">
														<option value="{{ $val->tingkat_kemandirian }}" >{{ $val->tingkat_kemandirian }}</option>
														<option value='A'>A</option>
														<option value='B'>B</option>
														<option value='C'>C</option>
													</select>
												</div>
												<!--end::Input group-->
												<!--end::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Gangguan Emosional</span>
													</label>
													<select class="form-select form-select-solid" data-control="select2"
														data-hide-search="true" data-placeholder="Select a Team Member" name="g_emosional"
														id="g_emosional">
														<option value="{{ $val->g_emosional }}" >{{ $val->g_emosional }}</option>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
													</select>
												</div>
													<!--end::Input group-->
													<!--end::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Gangguan Kognitiv</span>
													</label>
													<select class="form-select form-select-solid" data-control="select2"
														data-hide-search="true" data-placeholder="Select a Team Member" name="g_kognitiv"
														id="g_kognitiv">
														<option value="{{ $val->g_kognitiv }}" >{{ $val->g_kognitiv }}</option>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
													</select>
												</div>
												<!--end::Input group-->
												<!--end::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Penilaian Resiko Malnutrisi</span>
													</label>
													<select class="form-select form-select-solid" data-control="select2"
														data-hide-search="true" data-placeholder="Select a Team Member" name="p_resiko_malnutrisi"
														id="p_resiko_malnutrisi">
														<option value="{{ $val->p_resiko_malnutrisi }}" >{{ $val->p_resiko_malnutrisi }}</option>
														<option value='Normal'>Normal</option>
														<option value='Resiko Malnutrisi'>Resiko Malnutrisi</option>
														<option value='Malnutrisi'>Malnutrisi</option>
													</select>
												</div>
												<!--end::Input group-->
												<!--end::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Resiko Jatuh</span>
													</label>
													<select class="form-select form-select-solid" data-control="select2"
														data-hide-search="true" data-placeholder="Select a Team Member" name="p_resiko_jatuh"
														id="p_resiko_jatuh">
														<option value="{{ $val->p_resiko_jatuh }}" >{{ $val->p_resiko_jatuh }}</option>
														<option value="Ya">Ya</option>
														<option value="Tidak">Tidak</option>
													</select>
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
@foreach ($data->p3g as $key => $val)

          <!--begin::Modal - New Target-->
      <div class="modal fade" id="detailP3G{{ $val->id }}" tabindex="-1" aria-hidden="true">
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
											<label class="col-lg-4 fw-bold text-muted">Tingkat Kemandirian (AKS/ADL)</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
													<span
															class="fw-bolder fs-6 text-gray-800">{{ $data->p3g->last() != null ? $data->p3g->last()->tingkat_kemandirian : '-' }}</span>
													<span
															class="badge {{ $statusMan == 'Ketergantungan Berat / Total' ? 'badge-danger' : 'badge-success ' }}">{{ $statusMan != null ? $statusMan : '' }}</span>

											</div>
											<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Input group-->
									<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Gangguan Mental Emosional</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $data->p3g->last() != null ? $data->p3g->last()->g_emosional : '-' }}</span>
											</div>
											<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Penilaian Resiko Malnutrisi</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">

													<div class="col-lg-8 d-flex align-items-center">
															{{-- <span class="fw-bolder fs-6 text-gray-800 me-2">{{ $data->p3g->last() != null ? $data->p3g->last()->p_resiko_malnutrisi : '-' }}</span> --}}
															<span class="badge {{ $data->p3g->last()->p_resiko_malnutrisi == 'Malnutrisi' ? 'badge-danger' : 'badge-success ' }}">{{ $data->p3g->last()->p_resiko_malnutrisi != null ? $data->p3g->last()->p_resiko_malnutrisi : '' }}</span>
													</div>
											</div>
											<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Penilaian Kognitiv</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $data->p3g->last() != null ? $data->p3g->last()->g_kognitiv : '-' }}</span>
											</div>
											<!--end::Col-->
									</div>
									<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Resiko Jatuh</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $data->p3g->last() != null ? $data->p3g->last()->p_resiko_jatuh : '-' }}</span>
											</div>
											<!--end::Col-->
									</div>
									<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Terakhir Pemeriksaaan</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 fv-row">
													<span
															class="fw-bold text-gray-800 fs-6">{{ $data->p3g->last() != null ? $data->p3g->last()->tanggal_p_p3g->translatedFormat('d M Y, h:i A') : '-' }}</span>
											</div>
											<!--end::Col-->
									</div>
									<div class="row mb-7">
										<label class="col-lg-4 fw-bold text-muted">Diperiksa Oleh</label>
										<div class="col-lg-8 fv-row">
												<span
														class="fw-bold text-gray-800 fs-6">{{ $data->p3g->last()->user->name != null ? $data->p3g->last()->user->name : '-' }}</span>
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

