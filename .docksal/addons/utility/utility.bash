#!/usr/bin/env bash

## Include for use by other commands.
##
## Usage: none

#-------------------------- Settings --------------------------------

# PROJECT_ROOT is passed from fin.
# The following variables are configured in the '.env' file: DOCROOT, VIRTUAL_HOST.

SITE_DIRECTORY="default"
DOCROOT_PATH="${PROJECT_ROOT}/${DOCROOT}"
SITEDIR_PATH="${DOCROOT_PATH}/sites/${SITE_DIRECTORY}"

#-------------------------- END: Settings --------------------------------

#-------------------------- Helper functions --------------------------------

# Console colors
red='\033[0;31m'
green='\033[0;32m'
green_bg='\033[42m'
yellow='\033[1;33m'
NC='\033[0m'

echo-red () { echo -e "${red}$1${NC}"; }
echo-green () { echo -e "${green}$1${NC}"; }
echo-green-bg () { echo -e "${green_bg}$1${NC}"; }
echo-yellow () { echo -e "${yellow}$1${NC}"; }

is_windows ()
{
	local res=$(uname | grep 'CYGWIN_NT')
	if [[ "$res" != "" ]]; then
		return 0
	else
		return 1
	fi
}

# Check whether we have a working tty.
# Otherwise we are running in a non-tty environment ( e.g. Babun on Windows).
# We assume the environment is interactive if there is a tty.
# All other direct checks don't work well in and every environment and scripts.
is_tty ()
{
	[[ "$(/usr/bin/tty || true)" != "not a tty" ]]

	# TODO: rewrite this check using [ -t ] test
	# http://stackoverflow.com/questions/911168/how-to-detect-if-my-shell-script-is-running-through-a-pipe/911213#911213
	# 0: stdin, 1: stdout, 2: stderr
	# [ -t 0 -a -t 1 ]
}

# Yes/no confirmation dialog with an optional message
# @param $1 confirmation message
_confirm ()
{
	# Skip checks if not running interactively (not a tty or not on Windows)
	if ! is_tty; then return 0; fi

	while true; do
		read -p "$1 [y/n]: " answer
		case "$answer" in
			[Yy]|[Yy][Ee][Ss] )
				break
				;;
			[Nn]|[Nn][Oo] )
				exit 1
				;;
			* )
				echo 'Please answer yes or no.'
		esac
	done
}

#-------------------------- END: Helper functions --------------------------------

#------------------------- Collect arguments -----------------------------

while getopts ":y" opt; do
  case $opt in
    y)
      ASSUME_YES=$opt
      ;;
    \?)
      echo-red "Invalid option: $OPTARG" >&2
      exit 1
      ;;
  esac
done

#------------------------- End: Collect arguments ------------------------

