<div id="page-content-wrapper" class="mtop pside" style="overflow-x:hidden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Send to All subscribers</h1>
                        <p>This endpoint is used to send a notification to all subscribers. The request method of this call needs to be "POST".<br/>

                        The title, message and URL of the notification and the Image URL have to be sent as POST parameters to the API endpoint.<br/>

                        URL of the image to be shown in the notification needs to point to a 192 x 192 PNG. If this is not provided, the default company logo will be shown in the notification.<br/>
                        </p>
                       <hr/>
                       <h3>Endpoint URL</h3>
                       <p>https://api.letreach.com/send/all/</p>
                       <hr/>
                       <h3>Request parameters</h3>
                       <div class="container" style="border:1px solid black; width:80%">
                        <div class="row">
                            <div class="col-md-3 bold">
                            <h4>*title:</h4>
                            </div>
                            <div class="col-md-6 bold" >
                            <h4>string</h4> <h6>(Title of the Push notification.
                    Max Length = 35 Characters.)</h6>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-md-3 bold">
                            <h4>*message:</h4>
                            </div>
                            <div class="col-md-8 bold" >
                            <h4>string</h4> <h6>(Message that will be displayed in Push notification.
        Max Length=80 Chars)</h6>
                            </div>
                        </div>
                  <div class="row">
                            <div class="col-md-3 bold">
                            <h4>*url:</h4>
                            </div>
                            <div class="col-md-8 bold" >
                            <h4>string</h4> <h6>(URL on which a subscriber will be redirected upon clicking)</h6>
                            </div>
                        </div>
                    <div class="row">
                            <div class="col-md-3 bold">
                            <h4>image:</h4>
                            </div>
                            <div class="col-md-8 bold" >
                            <h4>string</h4> <h6>(URL of the image that will be shown in Push notification. URl should point to an image of 192x192 pixels. If this parameter is not set, the default site logo will be shown in the notification.)</h6>
                            </div>
                        </div>
                                            <div class="row">
                            <div class="col-md-3 bold">
                            <h4>utm_enable:</h4>
                            </div>
                            <div class="col-md-8 bold" >
                            <h4>int</h4> <h6>(send 1 to enable UTMs. This will enable UTM for the links)</h6>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-md-3 bold">
                            <h4>utm_source:</h4>
                            </div>
                            <div class="col-md-8 bold" >
                            <h4>string</h4> <h6>(this will work only if utm_enable is set to 1,
        UTM_Source parameter for the URLs)</h6>
                            </div>
                        </div>
                      <div class="row">
                            <div class="col-md-3 bold">
                            <h4>utm_campaign:</h4>
                            </div>
                            <div class="col-md-8 bold" >
                            <h4>string</h4> <h6>(this will work only if utm_enable is set to 1,
        UTM_Source parameter for the URLs)</h6>
                            </div>
                        </div>
                                        <div class="row">
                            <div class="col-md-3 bold">
                            <h4>action1_title:</h4>
                            </div>
                            <div class="col-md-8 bold" >
                            <h4>string</h4> <h6>(to make this work both action1_title and action1_link parameters are required,
        Action 1 section title)</h6>
                            </div>
                        </div>
                        </div>
                    </div>

                        </div>
                    </div>


                   <!--      <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
                    </div>
                </div>
            </div>
        </div>  