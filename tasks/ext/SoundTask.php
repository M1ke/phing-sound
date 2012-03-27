<?php
/*
 * $Id: FileSizeTask.php 1084 2011-05-06 09:55:25Z mrook $
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information please see
 * <http://phing.info>.
 */
require_once 'phing/Task.php';

/**
 * sound
 *
 * Makes a sound when specified in the build script
 *
 * @author      Mike Lehan <me@m1ke.me>
 * @version     $Id: SoundTask.php 1084 2012-03-27 12:11:25Z mrook $
 * @package     phing.tasks.ext
 */
class SoundTask extends Task
{
    private $sound="-1";

    /**
     * Which file to calculate the file size of
     * @param PhingFile $file
     */
    public function setSound($sound)
    {
        $this->sound = $sound;
    }

    /**
     * Main-Method for the Task
     *
     * @return  void
     * @throws  BuildException
     */
    public function main()
    {
		$command='rundll32 user32.dll,MessageBeep '.$this->sound;
		print($command);
        $output = array();
        $return = null;
		exec($command, $output, $return);
    }
}