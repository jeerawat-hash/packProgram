!/bin/bash
while :
do
ffmpeg -i rtsp://admin:@192.168.1.36 -fflags flush_packets -max_delay 2 -flags -global_header -hls_time 2 -hls_list_size 3 -vcodec copy -y /Users/jeerawat/Desktop/hls/stream.m3u8
done
