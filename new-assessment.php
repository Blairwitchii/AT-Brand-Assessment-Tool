<?php include "includes/header.php" ?>
<style>
    /* Wrapper */
    .new-assessment-body {
        font-family: 'Helvetica Neue', sans-serif;
        background-color: #f8f9fa;
        padding: 40px;
    }

    .new-assessment-container {
        max-width: 960px;
        margin: auto;
        padding: 0;
        border-radius: 10px;
        display: flex;
        gap: 40px;
        width: 908px;
    }

    .new-assessment-left,
    .new-assessment-right {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .new-assessment-group {
        display: flex;
        flex-direction: column;
    }

    .new-assessment-group label,
    .new-assessment-upload-wrapper label {
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 6px;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
    }

    .new-assessment-group input {
        padding: 10px 25px;
        border-radius: 25px;
        border: 1px solid #F1F2F2;
        background: #F9F9F9;
        font-size: 16px;
        outline: none;
        width: 100%;
    }

    .new-assessment-upload-wrapper {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .browseLink {
        font-weight: 700 !important;
    }

    .new-assessment-upload {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 1px dashed #DFE0E0;
        border-radius: 16px;
        padding: 40px;
        text-align: center;
        color: #333;
        cursor: pointer;
        background: #F9F9F9;

    }

    .new-assessment-upload.dragover {
        border-color: #666;
        background-color: #f0f0f0;
    }

    .new-assessment-upload input {
        display: none;
    }

    .new-assessment-upload p {
        margin-top: 12px;
        font-family: Manrope;
        font-size: 13px;
        max-width: 240px;
    }

    .new-assessment-upload a {
        color: #333;
        text-decoration: underline;
        cursor: pointer;
    }

    .new-assessment-file-preview {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 12px;
        padding: 12px 16px;
        background: transparent;
        border-radius: 8px;
        font-size: 14px;
        border: 0;
    }

    .file-icon {
        font-size: 18px;
    }

    .file-name {
        flex-grow: 1;
        color: #333;
        overflow-wrap: anywhere;
    }

    .remove-link {
        color: #e74c3c;
        cursor: pointer;
        font-weight: 500;
    }

    .new-assessment-button {
        margin-top: 0;
    }

    .new-assessment-button button {
        background-color: #1a1a1a;
        color: #fff;
        padding: 4px 32px;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 30px;
        background: #1E1E1E;
        height: 45px;
        font-family: Manrope;
        font-size: 13px;
        font-style: normal;
        font-weight: 600;
    }

    .required {
        color: red;
        margin-right: 4px;
    }

    @media (max-width: 768px) {
        .new-assessment-container {
            flex-direction: column;
        }

        .new-assessment-left,
        .new-assessment-right {
            width: 100%;
        }
    }
</style>
<?php include "includes/main-nav.php" ?>
<div class="dashboard-new">
    <div class="content-sec container">
        <div class="frame-3">
            <div class="frame-4">
                <div class="text-wrapper-5">Client Intake</div>
            </div>
            <div class="assessment-form-wrap">
                <form id="assessmentForm">
                    <div class="new-assessment-container">

                        <!-- Left Column -->
                        <div class="new-assessment-left">
                            <div class="new-assessment-group">
                                <label></span>Client name</label>
                                <input type="text" name="clientName" required />
                            </div>
                            <div class="new-assessment-group">
                                <label></span>Company name</label>
                                <input type="text" name="companyName" required />
                            </div>
                            <div class="new-assessment-group">
                                <label></span>Email address</label>
                                <input type="email" name="email" required />
                            </div>
                            <div class="new-assessment-group">
                                <label></span>Phone number</label>
                                <input type="tel" name="phone" required />
                            </div>
                            <div class="new-assessment-group">
                                <label></span>Business industry</label>
                                <input type="text" name="industry" required />
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="new-assessment-right">
                            <div class="new-assessment-upload-wrapper">
                                <label><span class="required">*</span>Upload growth transcript</label>
                                <label class="new-assessment-upload" id="uploadBox">
                                    <input type="file" name="transcriptFile" id="transcriptFile" accept=".pdf,.doc,.docx" required />
                                    <div>
                                        <div style="font-size: 28px;"><svg width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.22222 8.38462H4.33333C3.58189 8.38462 2.86122 8.67637 2.32986 9.1957C1.79851 9.71504 1.5 10.4194 1.5 11.1538V22.2308C1.5 22.9652 1.79851 23.6696 2.32986 24.1889C2.86122 24.7082 3.58189 25 4.33333 25H15.6667C16.4181 25 17.1388 24.7082 17.6701 24.1889C18.2015 23.6696 18.5 22.9652 18.5 22.2308V11.1538C18.5 10.4194 18.2015 9.71504 17.6701 9.1957C17.1388 8.67637 16.4181 8.38462 15.6667 8.38462H13.7778M13.7778 4.69231L10 1M10 1L6.22222 4.69231M10 1V16.6923" stroke="#222222" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></div>
                                        <p>Drag and drop your PDF or DOC file, or <a id="browseLink">browse</a> to choose your file.</p>
                                    </div>
                                </label>

                                <!-- File Preview -->
                                <div class="new-assessment-file-preview" id="filePreview" style="display: none;">
                                    <span class="file-icon"><svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.5 13.25V10.625C16.5 9.72989 16.1444 8.87145 15.5115 8.23851C14.8786 7.60558 14.0201 7.25 13.125 7.25H11.625C11.3266 7.25 11.0405 7.13147 10.8295 6.9205C10.6185 6.70952 10.5 6.42337 10.5 6.125V4.625C10.5 3.72989 10.1444 2.87145 9.51149 2.23851C8.87855 1.60558 8.02011 1.25 7.125 1.25H5.25M7.5 1.25H2.625C2.004 1.25 1.5 1.754 1.5 2.375V19.625C1.5 20.246 2.004 20.75 2.625 20.75H15.375C15.996 20.75 16.5 20.246 16.5 19.625V10.25C16.5 7.86305 15.5518 5.57387 13.864 3.88604C12.1761 2.19821 9.88695 1.25 7.5 1.25Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg></span>
                                    <span id="fileName" class="file-name"></span>
                                    <span id="removeFile" class="remove-link">remove</span>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="new-assessment-button">
                                <button type="submit">Initiate Assessment</button>
                            </div>
                        </div>
                    </div>
                </form>

                <script>
                    const uploadBox = document.getElementById('uploadBox');
                    const transcriptInput = document.getElementById('transcriptFile');
                    const browseLink = document.getElementById('browseLink');
                    const filePreview = document.getElementById('filePreview');
                    const fileNameDisplay = document.getElementById('fileName');
                    const removeFile = document.getElementById('removeFile');

                    browseLink.addEventListener('click', function(e) {
                        e.preventDefault();
                        transcriptInput.click();
                    });

                    ['dragenter', 'dragover'].forEach(evt => {
                        uploadBox.addEventListener(evt, e => {
                            e.preventDefault();
                            uploadBox.classList.add('dragover');
                        });
                    });

                    ['dragleave', 'drop'].forEach(evt => {
                        uploadBox.addEventListener(evt, e => {
                            e.preventDefault();
                            uploadBox.classList.remove('dragover');
                        });
                    });

                    uploadBox.addEventListener('drop', e => {
                        const file = e.dataTransfer.files[0];
                        if (file) {
                            transcriptInput.files = e.dataTransfer.files;
                            showFilePreview(file.name);
                        }
                    });

                    transcriptInput.addEventListener('change', () => {
                        if (transcriptInput.files.length > 0) {
                            showFilePreview(transcriptInput.files[0].name);
                        }
                    });

                    removeFile.addEventListener('click', () => {
                        transcriptInput.value = '';
                        filePreview.style.display = 'none';
                    });

                    function showFilePreview(name) {
                        fileNameDisplay.textContent = name;
                        filePreview.style.display = 'flex';
                    }

                    document.getElementById('assessmentForm').addEventListener('submit', function(e) {
                        e.preventDefault();
                        alert('Form submitted!');
                        // Add form submission logic here
                    });
                </script>
            </div>
        </div>
    </div>
    <section>
        <footer class="footer">
            <p class="privacy-policy-terms">
                <a href="#"><span class="span">Privacy Policy</span></a>
                <span class="text-wrapper-4">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <a href="#"><span class="span">Terms and Conditions</span></a>
            </p>
            <p class="p">© Fisher 2025. All rights reserved.</p>
        </footer>
    </section>

</div>
<?php include "includes/footer.php" ?>