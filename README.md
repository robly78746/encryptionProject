# encryptionProject
# Project 5 - Encryption

Time spent: **20** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [X]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [X]  Required: Decrypt the government message
  * [X]  Required: Encrypt a response and include in this README (at end of README)

3\. Generate Public-Private Keys
  * [X]  Required: Repair the key generator code
  * [X]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [X]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [X]  Required: Repair the create and verify signature code
  
6\. Encrypted Message 2
  * [X]  Required: Decrypt the message
  * [X]  Required: Verify the message
  * [X]  Required: Include a response message in this README (at end of README)

7\. Agent Messages
  * [X]  Required: Repair the dropbox code
  * [X]  Required: Repair the messages area
  * [X]  Required: Display encrypted messages for all agents
  * [X]  Required: Messages indicate whether the message signature is valid
  * [X]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [X]  Required: Decrypt as many email messages as possible
  * [X]  Required: Identify the double agent: Natasha

The following objectives are **optional**:

* Bonus Objective 1\.
  * [ ]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [ ]  Write a report of your discoveries (longer than 300 characters).
  * [ ]  Compose a secure email for sending over an insecure network.
  * [ ]  Include the email with your encrypted report in this README.

* Bonus Objective 3\.
  * [ ]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [ ]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='./project5UserStories1.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [yyyy] [name of copyright owner]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
	
## Responses to Encrypted Messages

* Response to encrypted message 1:
	* tCv7VpinPKAvCncVZETiK7Fue/UwZNrwwEs0kcCYqbP+ntzqs+71Q+GwtRUdmeLh
	
* Response to encrypted message 2 (split into two messages to fit new public key):
	* To: sydneybristow
	From: agent99
	Subject: Encrypted and Signed Message
	Body:mRTutQ4yC/en4BpJVzu4qFHoDPW/HlQYnReWzERHZFzHT1e5G7AJqTx5PaHD8vNywsbqxEWZSFvlNSLDJso9lUTBX8XEbYLFqTKOCbSn2A/+TlhxoctdO847bLsCwGsxAeJSae4JN8tctaTwzxDWOjsKXrxo0wsGvgfe8E9OqhXPyuoxhQKapf9DLaJJ3cZj++iSySLu00ksmwNdXC6SBV5CzxRsTMDzV76ROAvy0xHXy7sZw64Z74vs07LWuNY0oKUdzx4JrtxwIK+tnkPNcgHwsu2+z5/JSNcQ+JhCcQ5B4FXcxj5S7af8oFqqhmSZbmYKnTjk4EOKe/fEJvgP5g==  
	Signature: Jcu0yIYhu1mfLHYySXLNyUe51Y/ZOyK/+YxnWR3cEzZZAbwVjKiuwfts9a6pJHI4tBbnm2Gs8bJYYXNatDYQzjOPpvZo2eWossLT5498A1Q77EaY32Ml+OikiytYaD81uxpBOwJOFGMKWFiEdQkAGr7L/XbDc6pWK3oFfi8v96We4QenTnhMxxHb0NMELhx30xfJo7Ry2lDpEdlw2q0BBze8N38b5Krnpin2Y47gP4hHkdel87vmQ5j996IVVt/IWM/477C0nE6kHODexeEd7Rysq69DAF8blWNcbTdFriLJgxA76y+i1Kg9j7PbxbLANAKRLAC9AQBRnM7YZcdjcA==

	* To: sydneybristow
	From: agent99
	Subject: Encrypted and Signed Message
	Body:hXT8x7Uw11hiPe7u1RpB9Fzst33nlu7hXl/fhyErveJhzJUg4Lyjs/DNAQMqWlPvOz83kRS9ajPAkpUkmWMSazHN54xPCRD4bw3ZyS3Hlo2NIoaN9vU55Llm1CeSjUntIo2Fd+0t9YMBGn9noCO5Mq0Sze0QnUSDj6MuKmDFlepXPxGaYO2SVcS2J3Yof7ptXaZuvGNia+427/x+I01cvJ8USyiBLtfcyY8p0HvqsmSo13xDYFwQfMuLNH0teoJNoRz42H6zAtlBUfAhav0TIBWYGxf8a8Gm7vpGmxPsYWMb0DYNzq6/Mmpjx0HLRQqPLd75ps7yX3OLZwtt7ckqUg==   
	Signature: FQvvCu05sXM7CGe2rMNHJrJN3qWvJ8HwhbqWNn9wnp0X048dEiST/QQN5fsYXcJ8645PVrQlnFN+55urGy+aCKbChsQfSNy+6355uM6Lr2EZR994fkfpMsXFWI8UvsZScHPndDCGrmvxOdiRg4ZkvmncsKh8EEQLVs47G+tkaXJDAXfElqLuM9pRnPXN4zTSTutcDd6ld7467YeMobz9FXe2rJHtP/pzIOYqOyU4lBrEPD3/1BZQmSUeCy6TTeZ9sHx151W65Y8Ya+UQ3vQcW3wNUDJIJBk6KTul0ap/w9vox6FrkI0DMqmcri+6nHalBGpqRLgAA4UqrCtya532dA==
