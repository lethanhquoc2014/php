1. Phân loại cache
Cache có 2 loại:
1.1 In-memory cache (in-process cache)
- Tính nhất quán
Các thành phần bộ đệm sẽ nằm cục bộ trong một phiên bản của ứng dụng, đối với những ứng dụng từ trung bình cho tới lớn sẽ có nhiều bộ đệm nằm rãi rác do đó sẽ không có được tính nhất quán.
Cache này phù hợp với trường hợp lưu trữ dữ liệu bất biến
- Độ trễ (Overheads)
Tuỳ thuộc vào tốc độ của bộ đệm và thời gian hết giờ.
- Độ tin cậy
Do chia sẻ bộ nhớ chung với ứng dụng do đó cẩn thận xác định giới hạn trên của bộ nhớ.
Phù hợp các ứng dụng nhỏ.

Sản phẩm: APC, APCU.

1.2 Distributed cache
- Tính nhất quán
Bộ đệm được phân tán nhưng sẽ có một chế độ xem (trạng thái) duy nhất cho tất cả các node. Bằng thuật toán băm nó sẽ xác định được giá trị cụ thể đang nằm trên node nào. Do đó mà luôn luôn nhất quán về dữ liệu.
Cache này phù hợp với dữ liệu thường xuyên thay đổi nhưng đòi hỏi phải có sự nhất quán.
- Độ trễ (Overheads)
Bộ đệm được phân tán do đó phụ thuộc vào 2 yếu tố sau đây nên nó sẽ chậm hơn so với in-memory cache là độ trễ mạng và object serialization.
- Độ tin cậy
Do xử lý độc lập do đó mà nó không bị lỗi giống như in-process cache, nếu một node bị lỗi thì nó sẽ sd các node tiếp theo. Mô hình chung thì nếu bị lỗi chỉ bị giảm hiệu năng của hệ thống chứ ko làm hệ thống bị lỗi hoàn toàn.
Phù hợp ứng dụng lớn.

Sản phẩm: memcache, memcached