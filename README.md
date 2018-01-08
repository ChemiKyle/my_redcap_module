# PBC's REDCap Module

The module provides a test bed for the redcap\_oncore\_client.


## Prerequisites
- REDCap >= 8.0.0 (for versions < 8.0.0, [REDCap Modules](https://github.com/vanderbilt/redcap-external-modules) is required).

- Install and configure [REDCap Oncore Client](https://github.com/ctsit/redcap_oncore_client) according to its instructions.
- Clone this repo into to `<redcap-root>/modules/pbc_v<version_number>`.
- Go to **Control Center > Manage External Modules** and enable _PBC's Module_.


## Using this project

Go to any project home page where the REDCap OnCore Client has been enabled and configured. Choose _Test Link_ from the left hand menu to run the tests specified in test.php. Return the the same project home page and choose _OnCore Logs_ from the left hand menu to access the log entries just written by the test.

Revise the test.php as needed to run more tests.
