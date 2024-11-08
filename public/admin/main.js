new DataTable('#example');



        console.log("asdasd");
        $("#addAssetButton").click(function(e) {
            var appendSection = document.getElementById('appendSections');
            var newSection = document.createElement('div');

            newSection.innerHTML = `
            <section>
            <div class="uploading-container">
                <!-- col-1 -->
                <div class="file-uploading-bb b1">
                    <div class="tab-button-container">
                        <label class="my-btn btn1 active">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M21 8V20.9932C21 21.5501 20.5552 22 20.0066 22H3.9934C3.44495 22 3 21.556 3 21.0082V2.9918C3 2.45531 3.4487 2 4.00221 2H14.9968L21 8ZM19 9H14V4H5V20H19V9ZM8 7H11V9H8V7ZM8 11H16V13H8V11ZM8 15H16V17H8V15Z">
                                </path>
                            </svg>
                            File
                        </label>
                        <label class="my-btn btn2 " for="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M18.3643 15.5353L16.95 14.1211L18.3643 12.7069C20.3169 10.7543 20.3169 7.58847 18.3643 5.63585C16.4116 3.68323 13.2458 3.68323 11.2932 5.63585L9.87898 7.05007L8.46477 5.63585L9.87898 4.22164C12.6127 1.48797 17.0448 1.48797 19.7785 4.22164C22.5121 6.95531 22.5121 11.3875 19.7785 14.1211L18.3643 15.5353ZM15.5358 18.3638L14.1216 19.778C11.388 22.5117 6.9558 22.5117 4.22213 19.778C1.48846 17.0443 1.48846 12.6122 4.22213 9.87849L5.63634 8.46428L7.05055 9.87849L5.63634 11.2927C3.68372 13.2453 3.68372 16.4112 5.63634 18.3638C7.58896 20.3164 10.7548 20.3164 12.7074 18.3638L14.1216 16.9496L15.5358 18.3638ZM14.8287 7.75717L16.2429 9.17139L9.17187 16.2425L7.75766 14.8282L14.8287 7.75717Z" "></path></svg>
                                                 Link
                                            </label>
                                        </div>
                                        <div class="file-select-1 active">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d=" M2.9918
                                    21C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3
                                    22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918ZM20 15V5H4V19L14
                                    9L20 15ZM20 17.8284L14 11.8284L6.82843 19H20V17.8284ZM8 11C6.89543 11 6 10.1046 6 9C6
                                    7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path>
                            </svg>
                            <label for="actual-btn">Click here to upload</label>
                            <input type="file" id="actual-btn" />
                    </div>
                    <div class="file-select-2 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M13.0605 8.11073L14.4747 9.52494C17.2084 12.2586 17.2084 16.6908 14.4747 19.4244L14.1211 19.778C11.3875 22.5117 6.95531 22.5117 4.22164 19.778C1.48797 17.0443 1.48797 12.6122 4.22164 9.87849L5.63585 11.2927C3.68323 13.2453 3.68323 16.4112 5.63585 18.3638C7.58847 20.3164 10.7543 20.3164 12.7069 18.3638L13.0605 18.0102C15.0131 16.0576 15.0131 12.8918 13.0605 10.9392L11.6463 9.52494L13.0605 8.11073ZM19.778 14.1211L18.3638 12.7069C20.3164 10.7543 20.3164 7.58847 18.3638 5.63585C16.4112 3.68323 13.2453 3.68323 11.2927 5.63585L10.9392 5.98941C8.98653 7.94203 8.98653 11.1079 10.9392 13.0605L12.3534 14.4747L10.9392 15.8889L9.52494 14.4747C6.79127 11.741 6.79127 7.30886 9.52494 4.57519L9.87849 4.22164C12.6122 1.48797 17.0443 1.48797 19.778 4.22164C22.5117 6.95531 22.5117 11.3875 19.778 14.1211Z"
                                fill="rgba(141,32,35,1)"></path>
                        </svg>
                        <input class="my-input" type="text" placeholder="Your link herer...">
                    </div>
                </div>
                <!-- col 2-->
                <div class="file-uploading-bb b2">
                    <input class="my-input" type="text" placeholder="Add Headline">
                    <textarea class="my-input" placeholder="Type Something here" name="" id="" cols="30"
                        rows="10"></textarea>
                </div>
            </div>
        </section>
            `;
            appendSection.append(newSection);
        })
        $("#addDividerButton").click(function(e) {

            var appendSection = document.getElementById('appendSections');
            var newSection = document.createElement('div');

            newSection.innerHTML = `
            <div class="message-bar-container my-shaad marginClass">
            <div class="pp-drop-1">
            </div>
               </div>
            `;
            appendSection.append(newSection);
        });

        $("#addContactButton").click(function(e) {
            var appendSection = document.getElementById('appendSections');
            var newSection = document.createElement('div');

            newSection.innerHTML = `
            <section>
            <div class="contact-form uploading-container">
                <h2>Contact Us</h2>
                <form action="#" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
            `;
            appendSection.append(newSection);
        })
