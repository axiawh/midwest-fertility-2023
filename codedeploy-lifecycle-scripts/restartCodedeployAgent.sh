#!/bin/bash
at -M now + 2 minute <<< $'service codedeploy-agent restart'